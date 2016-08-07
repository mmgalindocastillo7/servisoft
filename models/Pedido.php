<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedido".
 *
 * @property string $id_pedido
 * @property string $tipo_producto
 * @property integer $codigo_cliente
 * @property string $fecha_venta
 * @property string $valor_pedido
 * @property string $cantidad
 * @property string $id_producto
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pedido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pedido', 'tipo_producto', 'codigo_cliente', 'fecha_venta', 'id_producto'], 'required'],
            [['id_pedido', 'codigo_cliente', 'id_producto'], 'integer'],
            [['fecha_venta'], 'safe'],
            [['tipo_producto', 'valor_pedido', 'cantidad'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pedido' => 'Id Pedido',
            'tipo_producto' => 'Tipo Producto',
            'codigo_cliente' => 'Codigo Cliente',
            'fecha_venta' => 'Fecha Venta',
            'valor_pedido' => 'Valor Pedido',
            'cantidad' => 'Cantidad',
            'id_producto' => 'Id Producto',
        ];
    }
}
