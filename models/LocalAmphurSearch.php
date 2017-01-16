<?php

namespace andahrm\setting\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use andahrm\setting\models\LocalAmphur;

/**
 * LocalAmphurSearch represents the model behind the search form about `andahrm\setting\models\LocalAmphur`.
 */
class LocalAmphurSearch extends LocalAmphur
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'province_id'], 'integer'],
            [['name'], 'safe'],
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
        $query = LocalAmphur::find();

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
            'province_id' => $this->province_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
