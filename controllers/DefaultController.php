<?php

namespace andahrm\setting\controllers;

use Yii;
use yii\web\Controller;
use andahrm\setting\models\Setting;

/**
 * Default controller for the `setting` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        //return $this->render('index');
        return $this->redirect(['general']);
    }
  
    public function actionGeneral()
    {
        $model = new \andahrm\setting\models\General;
        if ($model->load(Yii::$app->request->post())) {
            $this->saveModel($model);
        }else{
            $settingModel = Setting::find()->where(['type' => $this->action->id])->all();
            foreach ($settingModel as $key => $row){
                $name = $row->name;
                $model->$name = $row->value;
            }
            return $this->render($this->action->id, ['model' => $model]);
        }
    }

    public function actionReading()
    {
        $model = new \andahrm\setting\models\Reading;
        if ($model->load(Yii::$app->request->post())) {
            $this->saveModel($model);
        }else{
            $settingModel = Setting::find()->where(['type' => $this->action->id])->all();
            foreach ($settingModel as $key => $row){
                $name = $row->name;
                $model->$name = $row->value;
            }
            return $this->render($this->action->id, ['model' => $model]);
        }
    }

    public function actionSeo()
    {

    }

    public function actionClearAssets()
    {
        $frontendAssetPath = Yii::getAlias('@frontend') . '/web/assets/*';
        $backendAssetPath = Yii::getAlias('@backend') . '/web/assets/*';
        $assets = array_merge(
            glob($frontendAssetPath, GLOB_ONLYDIR),
            glob($backendAssetPath, GLOB_ONLYDIR)
        );

        foreach ($assets as $asset){
            \yii\helpers\FileHelper::removeDirectory($asset);
        }
        
        Yii::$app->getSession()->setFlash('clear',[
            'type' => 'success',
            'msg' => Yii::t('andahrm/setting', 'Clear assets completed.')
        ]);

        return Yii::$app->getResponse()->redirect(Yii::$app->getRequest()->referrer);
    }

    public function actionFlushCache()
    {   
        Yii::$app->cache->flush();
        
        Yii::$app->getSession()->setFlash('flush',[
            'type' => 'success',
            'msg' => Yii::t('andahrm/setting', 'Flush cache completed.')
        ]);

        return Yii::$app->getResponse()->redirect(Yii::$app->getRequest()->referrer);
    }
    
    protected function saveModel($model)
    {
        $transaction = Yii::$app->db->beginTransaction();
        try {
            foreach ($model->attributes as $name => $value){
                $settingModel = Setting::find()->where(['name' => $name, 'type' => $this->action->id])->one();
                if($settingModel){
                    $settingModel->value = $value;
                }else{
                    $settingModel = new Setting();
                    $settingModel->type = $this->action->id;
                    $settingModel->name = $name;
                    $settingModel->value = $value;
                }
                $settingModel->save();
            }
            $transaction->commit();
            Yii::$app->getSession()->setFlash('saved',[
                'type' => 'success',
                'msg' => Yii::t('andahrm', 'Save operation completed.')
            ]);
            return $this->redirect([$this->action->id]);
            
        } catch (Exception $e) {
            $transaction->rollBack();
            Yii::$app->getSession()->setFlash('error',[
                'type' => 'error',
                'msg' => Yii::t('andahrm', 'Save operation completed.')
            ]);
        }
    }
}
