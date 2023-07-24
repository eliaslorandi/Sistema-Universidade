<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Disciplina;

/**
 * DisciplinaSearch represents the model behind the search form of `app\models\Disciplina`.
 */
class DisciplinaSearch extends Disciplina
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'CH', 'PERIODO', 'NUCLEO_ID', 'MATRIZ_ID'], 'integer'],
            [['NOME'], 'safe'],
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
        $query = Disciplina::find();

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
            'CH' => $this->CH,
            'PERIODO' => $this->PERIODO,
            'NUCLEO_ID' => $this->NUCLEO_ID,
            'MATRIZ_ID' => $this->MATRIZ_ID,
        ]);

        $query->andFilterWhere(['like', 'NOME', $this->NOME]);

        return $dataProvider;
    }
}
