<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gaji".
 *
 * @property int $id
 * @property int|null $id_pegawai
 * @property float|null $gaji_pokok
 * @property float|null $tunjangan_istri
 * @property float|null $tunjangan_anak
 * @property float|null $tunjangan_makan
 *
 * @property Pegawai $pegawai
 */
class Gaji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gaji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai'], 'integer'],
            [['gaji_pokok', 'tunjangan_istri', 'tunjangan_anak', 'tunjangan_makan'], 'number'],
            [['id_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['id_pegawai' => 'id_pegawai']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pegawai' => 'Id Pegawai',
            'gaji_pokok' => 'Gaji Pokok',
            'tunjangan_istri' => 'Tunjangan Istri',
            'tunjangan_anak' => 'Tunjangan Anak',
            'tunjangan_makan' => 'Tunjangan Makan',
        ];
    }

    /**
     * Gets query for [[Pegawai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::className(), ['id_pegawai' => 'id_pegawai']);
    }
}
