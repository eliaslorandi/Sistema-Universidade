<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Coordena;

/**
 * CoordenaSearch represents the model behind the search form of `app\models\Coordena`.
 */
class CoordenaSearch extends Coordena
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USUARIO_ID', 'CURSO_ID'], 'integer'],
            [['INICIO', 'FIM'], 'safe'],
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
        $query = Coordena::find();

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
            'USUARIO_ID' => $this->USUARIO_ID,
            'CURSO_ID' => $this->CURSO_ID,
            'INICIO' => $this->INICIO,
            'FIM' => $this->FIM,
        ]);

        return $dataProvider;
    }
}
