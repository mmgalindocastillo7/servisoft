<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Compra;

/**
 * compraSearch represents the model behind the search form about `app\models\Compra`.
 */
class compraSearch extends Compra
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_compra', 'cantidad', 'valor_total', 'valor_unitario', 'proveedor_id', 'proveedor_id1'], 'integer'],
            [['fecha'], 'safe'],
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
        $query = Compra::find();

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
            'id_compra' => $this->id_compra,
            'cantidad' => $this->cantidad,
            'fecha' => $this->fecha,
            'valor_total' => $this->valor_total,
            'valor_unitario' => $this->valor_unitario,
            'proveedor_id' => $this->proveedor_id,
            'proveedor_id1' => $this->proveedor_id1,
        ]);

        return $dataProvider;
    }
}
