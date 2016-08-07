<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cava".
 *
 * @property string $id_cava
 * @property string $numero_cava
 * @property string $unidades_medidas_id
 * @property string $capacida
 * @property string $ubicacion_cava_id
 */
class Cava extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cava';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cava', 'numero_cava', 'unidades_medidas_id', 'capacida', 'ubicacion_cava_id'], 'required'],
            [['id_cava', 'unidades_medidas_id', 'ubicacion_cava_id'], 'integer'],
            [['numero_cava', 'capacida'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cava' => 'Id Cava',
            'numero_cava' => 'Numero Cava',
            'unidades_medidas_id' => 'Unidades Medidas ID',
            'capacida' => 'Capacida',
            'ubicacion_cava_id' => 'Ubicacion Cava ID',
        ];
    }
}
