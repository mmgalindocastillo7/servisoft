<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\existencia_venta;

/**
 * Existencia_ventaSearch represents the model behind the search form about `app\models\existencia_venta`.
 */
class Existencia_ventaSearch extends existencia_venta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_existencia_venta', 'id_venta', 'id_existencia'], 'integer'],
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
        $query = existencia_venta::find();

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
            'id_existencia_venta' => $this->id_existencia_venta,
            'id_venta' => $this->id_venta,
            'id_existencia' => $this->id_existencia,
        ]);

        return $dataProvider;
    }
}
