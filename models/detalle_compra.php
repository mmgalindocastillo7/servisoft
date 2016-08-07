<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalle_compra".
 *
 * @property string $id_detalle_compra
 * @property string $id_compra
 * @property string $id_producto
 * @property double $cantidad
 * @property integer $unidad_medidas
 */
class detalle_compra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalle_compra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_detalle_compra', 'id_compra', 'id_producto', 'cantidad', 'unidad_medidas'], 'required'],
            [['id_detalle_compra', 'id_compra', 'id_producto', 'unidad_medidas'], 'integer'],
            [['cantidad'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_detalle_compra' => 'Id Detalle Compra',
            'id_compra' => 'Id Compra',
            'id_producto' => 'Id Producto',
            'cantidad' => 'Cantidad',
            'unidad_medidas' => 'Unidad Medidas',
        ];
    }
}
