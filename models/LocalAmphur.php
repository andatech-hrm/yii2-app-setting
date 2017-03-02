<?php

namespace andahrm\setting\models;

use Yii;

/**
 * This is the model class for table "local_amphur".
 *
 * @property integer $id
 * @property string $name
 * @property integer $province_id
 */
class LocalAmphur extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'local_amphur';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'province_id'], 'required'],
            [['id', 'province_id'], 'integer'],
            [['name'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('andahrm/setting', 'ID'),
            'name' => Yii::t('andahrm/setting', 'Name'),
            'province_id' => Yii::t('andahrm/setting', 'Province'),
        ];
    }
}
