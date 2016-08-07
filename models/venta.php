<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "venta".
 *
 * @property string $id_venta
 * @property string $total_venta
 * @property string $tipo_negocio
 * @property string $id_cliente
 * @property string $id_pago
 */
class venta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'venta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_venta', 'total_venta', 'tipo_negocio', 'id_cliente', 'id_pago'], 'required'],
            [['id_venta', 'id_cliente', 'id_pago'], 'integer'],
            [['total_venta', 'tipo_negocio'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_venta' => 'Id Venta',
            'total_venta' => 'Total Venta',
            'tipo_negocio' => 'Tipo Negocio',
            'id_cliente' => 'Id Cliente',
            'id_pago' => 'Id Pago',
        ];
    }
}
