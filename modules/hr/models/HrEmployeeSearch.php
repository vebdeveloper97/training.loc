<?php

namespace app\modules\hr\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\hr\models\HrEmployee;

/**
 * HrEmployeeSearch represents the model behind the search form of `app\modules\hr\models\HrEmployee`.
 */
class HrEmployeeSearch extends HrEmployee
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'inn', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['fish', 'of_brith', 'passport_series', 'phone', 'jins', 'adress', 'by_whom', 'add_info'], 'safe'],
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
        $query = HrEmployee::find();

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
            'of_brith' => $this->of_brith,
            'inn' => $this->inn,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'fish', $this->fish])
            ->andFilterWhere(['like', 'passport_series', $this->passport_series])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'jins', $this->jins])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'by_whom', $this->by_whom])
            ->andFilterWhere(['like', 'add_info', $this->add_info]);

        return $dataProvider;
    }
}
