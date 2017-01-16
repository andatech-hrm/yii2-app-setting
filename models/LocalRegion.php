<?php

namespace andahrm\setting\models;

use Yii;

/**
 * This is the model class for table "local_region".
 *
 * @property integer $id
 * @property string $name
 */
class LocalRegion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'local_region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
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
        ];
    }
}
