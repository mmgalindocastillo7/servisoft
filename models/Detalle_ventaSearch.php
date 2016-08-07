<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\detalle_venta;

/**
 * Detalle_ventaSearch represents the model behind the search form about `app\models\detalle_venta`.
 */
class Detalle_ventaSearch extends detalle_venta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_detalle_venta', 'id_venta_Existencia', 'id_pagos', 'id_venta', 'id_existencias', 'id_producto'], 'integer'],
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
        $query = detalle_venta::find();

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
            'id_detalle_venta' => $this->id_detalle_venta,
            'id_venta_Existencia' => $this->id_venta_Existencia,
            'id_pagos' => $this->id_pagos,
            'id_venta' => $this->id_venta,
            'id_existencias' => $this->id_existencias,
            'id_producto' => $this->id_producto,
        ]);

        return $dataProvider;
    }
}
