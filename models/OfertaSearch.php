<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Oferta;

/**
 * OfertaSearch represents the model behind the search form of `app\models\Oferta`.
 */
class OfertaSearch extends Oferta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'MATRIZ_ID', 'USUARIO_ID'], 'integer'],
            [['SEMESTRE_INICIO', 'DATA_REGISTRO'], 'safe'],
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
        $query = Oferta::find();

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
            'ID' => $this->ID,
            'MATRIZ_ID' => $this->MATRIZ_ID,
            'USUARIO_ID' => $this->USUARIO_ID,
        ]);

        $query->andFilterWhere(['like', 'SEMESTRE_INICIO', $this->SEMESTRE_INICIO])
            ->andFilterWhere(['like', 'DATA_REGISTRO', $this->DATA_REGISTRO]);

        return $dataProvider;
    }
}
