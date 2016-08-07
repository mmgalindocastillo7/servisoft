<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidades_medida".
 *
 * @property string $id_unidades_medida
 * @property string $descripcion
 * @property string $estado
 * @property string $id_detalle_compra
 * @property string $id_producto
 */
class unidades_medida extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unidades_medida';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_unidades_medida', 'descripcion', 'estado', 'id_detalle_compra', 'id_producto'], 'required'],
            [['id_unidades_medida', 'id_detalle_compra', 'id_producto'], 'integer'],
            [['descripcion', 'estado'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_unidades_medida' => 'Id Unidades Medida',
            'descripcion' => 'Descripcion',
            'estado' => 'Estado',
            'id_detalle_compra' => 'Id Detalle Compra',
            'id_producto' => 'Id Producto',
        ];
    }
}
