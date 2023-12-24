<?php

/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231209
 * 新闻model-query-search
 */


namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\News;

/**
 * NewsSearch represents the model behind the search form of `app\models\News`.
 */
class NewsSearch extends News
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nid'], 'integer'],
            [['ntitle', 'nauthor', 'ndate', 'ncontent'], 'safe'],
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
        $query = News::find();

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
            'nid' => $this->nid,
            'ndate' => $this->ndate,
        ]);

        $query->andFilterWhere(['like', 'ntitle', $this->ntitle])
            ->andFilterWhere(['like', 'nauthor', $this->nauthor])
            ->andFilterWhere(['like', 'ncontent', $this->ncontent]);

        return $dataProvider;
    }
}
