<?php

namespace andahrm\setting\models;

use Yii;

/**
 * This is the model class for table "translate".
 *
 * @property integer $id
 * @property string $name
 * @property string $language
 * @property string $value
 */
class Translate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'translate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'language', 'value'], 'required'],
            [['name', 'value'], 'string', 'max' => 255],
            [['language'], 'string', 'max' => 5],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('andahrm/structure', 'ID'),
            'name' => Yii::t('andahrm/structure', 'Name'),
            'language' => Yii::t('andahrm/structure', 'Language'),
            'value' => Yii::t('andahrm/structure', 'Value'),
        ];
    }
}
