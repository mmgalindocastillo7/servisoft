<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ubicacion_cava".
 *
 * @property string $id_ubicacion_cava
 * @property string $cantidad
 * @property string $merma
 * @property string $fecha_entrada
 * @property string $id_existencia
 * @property string $id_cava
 */
class ubicacion_cava extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ubicacion_cava';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ubicacion_cava', 'cantidad', 'merma', 'fecha_entrada', 'id_existencia', 'id_cava'], 'required'],
            [['id_ubicacion_cava', 'id_existencia', 'id_cava'], 'integer'],
            [['cantidad', 'merma', 'fecha_entrada'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ubicacion_cava' => 'Id Ubicacion Cava',
            'cantidad' => 'Cantidad',
            'merma' => 'Merma',
            'fecha_entrada' => 'Fecha Entrada',
            'id_existencia' => 'Id Existencia',
            'id_cava' => 'Id Cava',
        ];
    }
}
