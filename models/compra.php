<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compra".
 *
 * @property string $id_compra
 * @property integer $cantidad
 * @property string $fecha
 * @property integer $valor_total
 * @property integer $valor_unitario
 * @property string $proveedor_id
 * @property string $proveedor_id1
 */
class compra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_compra', 'cantidad', 'fecha', 'valor_total', 'valor_unitario', 'proveedor_id', 'proveedor_id1'], 'required'],
            [['id_compra', 'cantidad', 'valor_total', 'valor_unitario', 'proveedor_id', 'proveedor_id1'], 'integer'],
            [['fecha'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_compra' => 'Id Compra',
            'cantidad' => 'Cantidad',
            'fecha' => 'Fecha',
            'valor_total' => 'Valor Total',
            'valor_unitario' => 'Valor Unitario',
            'proveedor_id' => 'Proveedor ID',
            'proveedor_id1' => 'Proveedor Id1',
        ];
    }
}
