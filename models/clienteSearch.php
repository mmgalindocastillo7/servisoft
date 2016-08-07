<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\cliente;

/**
 * clienteSearch represents the model behind the search form about `app\models\cliente`.
 */
class clienteSearch extends cliente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cliente', 'estado', 'tipo_cliente'], 'integer'],
            [['Codigo', 'razon_social', 'direccion', 'nombre_negocio'], 'safe'],
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
        $query = cliente::find();

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
            'id_cliente' => $this->id_cliente,
            'estado' => $this->estado,
            'tipo_cliente' => $this->tipo_cliente,
        ]);

        $query->andFilterWhere(['like', 'Codigo', $this->Codigo])
            ->andFilterWhere(['like', 'razon_social', $this->razon_social])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'nombre_negocio', $this->nombre_negocio]);

        return $dataProvider;
    }
}
