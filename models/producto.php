<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property string $id_producto
 * @property string $descripcion
 * @property string $estado
 * @property integer $valor_unitario
 * @property string $imagen
 * @property string $id_tipo_producto
 * @property string $id_unidades_medidas
 * @property string $id_pedido
 */
class producto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_producto', 'estado', 'imagen', 'id_tipo_producto', 'id_unidades_medidas', 'id_pedido'], 'required'],
            [['id_producto', 'valor_unitario', 'id_tipo_producto', 'id_unidades_medidas', 'id_pedido'], 'integer'],
            [['descripcion', 'estado', 'imagen'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_producto' => 'Id Producto',
            'descripcion' => 'Descripcion',
            'estado' => 'Estado',
            'valor_unitario' => 'Valor Unitario',
            'imagen' => 'Imagen',
            'id_tipo_producto' => 'Id Tipo Producto',
            'id_unidades_medidas' => 'Id Unidades Medidas',
            'id_pedido' => 'Id Pedido',
        ];
    }
}
