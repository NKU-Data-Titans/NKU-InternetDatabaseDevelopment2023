<?php


/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231208
 */


namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sea;

/**
 * SeaSearch represents the model behind the search form of `app\models\Sea`.
 */
class SeaSearch extends Sea
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wid'], 'integer'],
            [['wname', 'wsymbol', 'wdescription', 'wimg'], 'safe'],
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
        $query = Sea::find();

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
            'wid' => $this->wid,
        ]);

        $query->andFilterWhere(['like', 'wname', $this->wname])
            ->andFilterWhere(['like', 'wsymbol', $this->wsymbol])
            ->andFilterWhere(['like', 'wdescription', $this->wdescription])
            ->andFilterWhere(['like', 'wimg', $this->wimg]);

        return $dataProvider;
    }
}
