<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Existencia;

/**
 * ExistenciaSearch represents the model behind the search form about `app\models\Existencia`.
 */
class ExistenciaSearch extends Existencia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_existencia', 'id_Producto', 'id_unidades_medida'], 'integer'],
            [['fecha_entradas', 'fecha_salida'], 'safe'],
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
        $query = Existencia::find();

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
            'id_existencia' => $this->id_existencia,
            'id_Producto' => $this->id_Producto,
            'id_unidades_medida' => $this->id_unidades_medida,
        ]);

        $query->andFilterWhere(['like', 'fecha_entradas', $this->fecha_entradas])
            ->andFilterWhere(['like', 'fecha_salida', $this->fecha_salida]);

        return $dataProvider;
    }
}
