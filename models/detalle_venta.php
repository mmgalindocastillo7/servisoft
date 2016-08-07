<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalle_venta".
 *
 * @property string $id_detalle_venta
 * @property string $id_venta_Existencia
 * @property string $id_pagos
 * @property string $id_venta
 * @property string $id_existencias
 * @property string $id_producto
 */
class detalle_venta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalle_venta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_detalle_venta', 'id_venta_Existencia', 'id_pagos', 'id_venta', 'id_existencias', 'id_producto'], 'required'],
            [['id_detalle_venta', 'id_venta_Existencia', 'id_pagos', 'id_venta', 'id_existencias', 'id_producto'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_detalle_venta' => 'Id Detalle Venta',
            'id_venta_Existencia' => 'Id Venta  Existencia',
            'id_pagos' => 'Id Pagos',
            'id_venta' => 'Id Venta',
            'id_existencias' => 'Id Existencias',
            'id_producto' => 'Id Producto',
        ];
    }
}
