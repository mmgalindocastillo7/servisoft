<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\unidades_medida;

/**
 * Unidades_medidaSearch represents the model behind the search form about `app\models\unidades_medida`.
 */
class Unidades_medidaSearch extends unidades_medida
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_unidades_medida', 'id_detalle_compra', 'id_producto'], 'integer'],
            [['descripcion', 'estado'], 'safe'],
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
        $query = unidades_medida::find();

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
            'id_unidades_medida' => $this->id_unidades_medida,
            'id_detalle_compra' => $this->id_detalle_compra,
            'id_producto' => $this->id_producto,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
