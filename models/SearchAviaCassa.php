<?php

namespace komer45\avia\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use komer45\avia\models\AviaCassa;

/**
 * SearchAviaCassa represents the model behind the search form about `komer45\avia\models\AviaCassa`.
 */
class SearchAviaCassa extends AviaCassa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'reise_number', 'time_in_travel', 'class', 'cost', 'places', 'distinct_throught'], 'integer'],
            [['date_time', 'final_distinct', 'dostup'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = AviaCassa::find();

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
            'reise_number' => $this->reise_number,
            'date_time' => $this->date_time,
            'time_in_travel' => $this->time_in_travel,
            'class' => $this->class,
            'cost' => $this->cost,
            'places' => $this->places,
            'distinct_throught' => $this->distinct_throught,
        ]);

        $query->andFilterWhere(['like', 'final_distinct', $this->final_distinct])
            ->andFilterWhere(['like', 'dostup', $this->dostup]);

        return $dataProvider;
    }
}
