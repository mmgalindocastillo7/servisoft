<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pedido;

/**
 * PedidoSearch represents the model behind the search form about `app\models\Pedido`.
 */
class PedidoSearch extends Pedido
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pedido', 'codigo_cliente', 'id_producto'], 'integer'],
            [['tipo_producto', 'fecha_venta', 'valor_pedido', 'cantidad'], 'safe'],
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
        $query = Pedido::find();

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
            'id_pedido' => $this->id_pedido,
            'codigo_cliente' => $this->codigo_cliente,
            'fecha_venta' => $this->fecha_venta,
            'id_producto' => $this->id_producto,
        ]);

        $query->andFilterWhere(['like', 'tipo_producto', $this->tipo_producto])
            ->andFilterWhere(['like', 'valor_pedido', $this->valor_pedido])
            ->andFilterWhere(['like', 'cantidad', $this->cantidad]);

        return $dataProvider;
    }
}
