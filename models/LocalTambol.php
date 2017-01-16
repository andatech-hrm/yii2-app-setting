<?php

namespace andahrm\setting\models;

use Yii;

/**
 * This is the model class for table "local_tambol".
 *
 * @property integer $id
 * @property string $name
 * @property integer $peaple
 * @property integer $post
 * @property integer $amphur_id
 */
class LocalTambol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'local_tambol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'peaple', 'post', 'amphur_id'], 'required'],
            [['id', 'peaple', 'post', 'amphur_id'], 'integer'],
            [['name'], 'string'],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('andahrm/settings', 'เลขตำบล'),
            'name' => Yii::t('andahrm/settings', 'ตำบล'),
            'peaple' => Yii::t('andahrm/settings', 'จำนวนประชากร'),
            'post' => Yii::t('andahrm/settings', 'รหัสไปรษณีย์'),
            'amphur_id' => Yii::t('andahrm/settings', 'เลขอำเภอ'),
        ];
    }
}
