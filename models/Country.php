<?php

namespace andahrm\setting\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property integer $id
 * @property string $title
 */
class Country extends \yii\db\ActiveRecord
{
    const DEFAULT_COUNTRY = 256;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('andahrm/setting', 'ID'),
            'title' => Yii::t('andahrm/setting', 'Title'),
        ];
    }
}
