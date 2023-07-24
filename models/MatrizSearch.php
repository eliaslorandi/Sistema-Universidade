<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Matriz;

/**
 * MatrizSearch represents the model behind the search form of `app\models\Matriz`.
 */
class MatrizSearch extends Matriz
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'CH_TOTAL', 'CURSO_ID'], 'integer'],
            [['SIGLA'], 'safe'],
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
        $query = Matriz::find();

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
            'CH_TOTAL' => $this->CH_TOTAL,
            'CURSO_ID' => $this->CURSO_ID,
        ]);

        $query->andFilterWhere(['like', 'SIGLA', $this->SIGLA]);

        return $dataProvider;
    }
}
