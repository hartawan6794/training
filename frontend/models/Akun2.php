<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "akun2".
 *
 * @property int $kd_akun2
 * @property int $kd_akun1
 * @property string $akun2
 */
class Akun2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akun2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_akun2', 'kd_akun1', 'akun2'], 'required'],
            [['kd_akun2', 'kd_akun1'], 'integer'],
            [['akun2'], 'string', 'max' => 100],
            [['kd_akun1', 'kd_akun2'], 'unique', 'targetAttribute' => ['kd_akun1', 'kd_akun2']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_akun2' => 'Kd Akun2',
            'kd_akun1' => 'Kd Akun1',
            'akun2' => 'Akun2',
        ];
    }
}
