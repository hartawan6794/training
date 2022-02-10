<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Gaji;

/**
 * Gajisearch represents the model behind the search form of `frontend\models\Gaji`.
 */
class Gajisearch extends Gaji
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_pegawai'], 'integer'],
            [['gaji_pokok', 'tunjangan_istri', 'tunjangan_anak', 'tunjangan_makan'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Gaji::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_pegawai' => $this->id_pegawai,
            'gaji_pokok' => $this->gaji_pokok,
            'tunjangan_istri' => $this->tunjangan_istri,
            'tunjangan_anak' => $this->tunjangan_anak,
            'tunjangan_makan' => $this->tunjangan_makan,
        ]);

        return $dataProvider;
    }
}
