<?php

/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231208
 */


namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ChElement;

/**
 * ChElementSearch represents the model behind the search form of `app\models\ChElement`.
 */
class ChElementSearch extends ChElement
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ceid'], 'integer'],
            [['cename', 'cesymbol', 'cedescription'], 'safe'],
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
        $query = ChElement::find();

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
            'ceid' => $this->ceid,
        ]);

        $query->andFilterWhere(['like', 'cename', $this->cename])
            ->andFilterWhere(['like', 'cesymbol', $this->cesymbol])
            ->andFilterWhere(['like', 'cedescription', $this->cedescription]);

        return $dataProvider;
    }
}
