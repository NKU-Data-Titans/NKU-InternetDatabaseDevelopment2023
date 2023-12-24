<?php


/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231208
 * 核污染监测数据model-query-search
 */


namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Detection;

/**
 * DetectionSearch represents the model behind the search form of `app\models\Detection`.
 */
class DetectionSearch extends Detection
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deid', 'dejingwei', 'deaverage'], 'string'],
            [['deplace'], 'safe'],
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
        $query = Detection::find();

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
            'deid' => $this->deid,
            'dejingwei' => $this->dejingwei,
            'deaverage' => $this->deaverage,
        ]);

        $query->andFilterWhere(['like', 'deplace', $this->deplace]);

        return $dataProvider;
    }
}
