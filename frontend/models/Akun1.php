<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "akun1".
 *
 * @property int $akun1
 */
class Akun1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akun1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['akun1'], 'required'],
            [['akun1'], 'integer'],
            [['akun1'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'akun1' => 'Akun1',
        ];
    }
}
