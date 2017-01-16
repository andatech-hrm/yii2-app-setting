<?php

namespace andahrm\setting\models;

use Yii;

/**
 * This is the model class for table "local_province".
 *
 * @property integer $id
 * @property string $name
 * @property integer $region_id
 */
class LocalProvince extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'local_province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'region_id'], 'required'],
            [['id', 'region_id'], 'integer'],
            [['name'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('andahrm/settings', 'ID'),
            'name' => Yii::t('andahrm/settings', 'Name'),
            'region_id' => Yii::t('andahrm/settings', 'Region ID'),
        ];
    }
}
