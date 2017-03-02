<?php

namespace andahrm\setting;

use Yii;
use andahrm\setting\models\Setting;
use backend\components\helpers\Data;
/**
 * setting module definition class
 */
class Module extends \yii\base\Module  implements \yii\base\BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'andahrm\setting\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        $this->setLayout();
        
        //$this->registerTranslations();
        
//         $this->setModules([
//             'translation' => [
//                 'class' => 'lajax\translatemanager\Module'
//             ]
//         ]);
    }
    
    public function bootstrap($app)
    {
//        $model = Setting::find()->all();
//        foreach ($model as $section){
//            $settings[$section->type][$section->name] = $section->value;
//        }

        $settings = Data::cache(Setting::CACHE_KEY, 3600, function() {
            $model = Setting::find()->all();
            $settings = [];
            foreach ($model as $section){
                $settings[$section->type][$section->name] = $section->value;
            }

            return $settings;
        });

        $general = $settings['general'];
        $app->name = $general['name'];
        $app->language = $general['language'];
        $app->timezone = $general['timezone'];
        $app->formatter->dateFormat = $general['dateformat'];
        $app->formatter->timeFormat = $general['timeformat'];
        $app->view->title = $general['title'];
        
        $appLang = strtolower($app->language);
        if($appLang === 'th' || $appLang === 'th-th'){
            //$app->formatter->class = '\dixonsatit\thaiYearFormatter\ThaiYearFormatter';
        }
        
        $reading = $settings['reading'];
        $app->params['app-settings'] = [
            'reading' => [
                'pagesize' => $reading['page_size'],
            ],
        ];
        
        $seos = [
            'description' => $general['description'],
            'keywords' => $general['keywords'],
            'content-language' => $general['language'],
            'content-type' => 'text/html; charset='.$app->charset,
        ];
        foreach ($seos as $key => $seo){
            $app->view->registerMetaTag(['name' => $key, 'content' => $seo], $key);
        }
    }

    /**
     * Set Layout
     */
    private function setLayout()
    {
        $this->layoutPath = '@andahrm/setting/views/layouts';
        $this->layout = 'main';
    }

    public function registerTranslations()
    {
        Yii::$app->i18n->translations['andahrm'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@backend/components/messages',
            'fileMap' => [
                'andahrm' => 'andahrm.php',
            ]
        ];
        
//         Yii::$app->i18n->translations['andahrm/*'] = [
//             'class' => 'yii\i18n\PhpMessageSource',
//             'sourceLanguage' => 'en-US',
//             'basePath' => '@andahrm/setting/messages',
//             'fileMap' => [
//                 'andahrm/setting' => 'setting.php',
//             ]
//         ];
    }
}
