<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pago;

/**
 * PagoSearch represents the model behind the search form about `app\models\Pago`.
 */
class PagoSearch extends Pago
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pago', 'valor_total', 'id_venta'], 'integer'],
            [['comprobante', 'codigo_cliente', 'estado', 'fecha_vencimiento'], 'safe'],
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
        $query = Pago::find();

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
            'id_pago' => $this->id_pago,
            'valor_total' => $this->valor_total,
            'id_venta' => $this->id_venta,
        ]);

        $query->andFilterWhere(['like', 'comprobante', $this->comprobante])
            ->andFilterWhere(['like', 'codigo_cliente', $this->codigo_cliente])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'fecha_vencimiento', $this->fecha_vencimiento]);

        return $dataProvider;
    }
}
