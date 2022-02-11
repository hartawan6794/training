<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nip
 * @property string $nama
 * @property string $jekel
 * @property string $tempat_lahir
 * @property string|null $tanggal_lahir
 * @property string $telpon
 * @property string $agama
 * @property string $alamat
 * @property string $golongan
 *
 * @property Gaji[] $gajis
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'jekel', 'tempat_lahir', 'telpon', 'agama', 'alamat', 'golongan'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['nip'], 'string', 'max' => 50],
            [['nama', 'tempat_lahir'], 'string', 'max' => 150],
            [['jekel', 'agama'], 'string', 'max' => 30],
            [['telpon'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 200],
            [['golongan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nip' => 'NIP',
            'nama' => 'Nama',
            'jekel' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'telpon' => 'Telpon',
            'agama' => 'Agama',
            'alamat' => 'Alamat',
            'golongan' => 'Golongan',
        ];
    }

    /**
     * Gets query for [[Gajis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGajis()
    {
        return $this->hasMany(Gaji::className(), ['id_pegawai' => 'id_pegawai']);
    }
}
