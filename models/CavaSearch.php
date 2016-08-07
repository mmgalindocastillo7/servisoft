<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cava;

/**
 * CavaSearch represents the model behind the search form about `app\models\Cava`.
 */
class CavaSearch extends Cava
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cava', 'unidades_medidas_id', 'ubicacion_cava_id'], 'integer'],
            [['numero_cava', 'capacida'], 'safe'],
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
        $query = Cava::find();

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
            'id_cava' => $this->id_cava,
            'unidades_medidas_id' => $this->unidades_medidas_id,
            'ubicacion_cava_id' => $this->ubicacion_cava_id,
        ]);

        $query->andFilterWhere(['like', 'numero_cava', $this->numero_cava])
            ->andFilterWhere(['like', 'capacida', $this->capacida]);

        return $dataProvider;
    }
}
