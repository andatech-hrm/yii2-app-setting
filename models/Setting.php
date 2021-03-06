<?php

namespace andahrm\setting\models;

use Yii;

/**
 * This is the model class for table "setting".
 *
 * @property integer $id
 * @property string $type
 * @property string $name
 * @property string $value
 */
class Setting extends \yii\db\ActiveRecord
{
    const CACHE_KEY = 'andacmsSettings';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['value'], 'string'],
            [['type', 'name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('andahrm/setting', 'ID'),
            'type' => Yii::t('andahrm/setting', 'Type'),
            'name' => Yii::t('andahrm/setting', 'Name'),
            'value' => Yii::t('andahrm/setting', 'Value'),
        ];
    }

    public static function getTypes()
    {
        return [
            'general' => ['label'=>'General','icon'=>'fa fa-globe'],
            'reading' => ['label'=>'Reading','icon'=>'fa fa-eye'],
        ];
    }



    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub

        Yii::$app->cache->delete(self::CACHE_KEY);
    }

    public function afterDelete()
    {
        parent::afterDelete(); // TODO: Change the autogenerated stub

        Yii::$app->cache->delete(self::CACHE_KEY);
    }
}
