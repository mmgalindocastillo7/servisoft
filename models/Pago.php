<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pago".
 *
 * @property string $id_pago
 * @property string $comprobante
 * @property string $codigo_cliente
 * @property string $estado
 * @property integer $valor_total
 * @property string $fecha_vencimiento
 * @property string $id_venta
 */
class Pago extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pago';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pago', 'comprobante', 'codigo_cliente', 'estado', 'valor_total', 'id_venta'], 'required'],
            [['id_pago', 'valor_total', 'id_venta'], 'integer'],
            [['comprobante', 'codigo_cliente', 'estado', 'fecha_vencimiento'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pago' => 'Id Pago',
            'comprobante' => 'Comprobante',
            'codigo_cliente' => 'Codigo Cliente',
            'estado' => 'Estado',
            'valor_total' => 'Valor Total',
            'fecha_vencimiento' => 'Fecha Vencimiento',
            'id_venta' => 'Id Venta',
        ];
    }
}
