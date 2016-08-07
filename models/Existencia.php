<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "existencia".
 *
 * @property string $id_existencia
 * @property string $fecha_entradas
 * @property string $fecha_salida
 * @property string $id_Producto
 * @property string $id_unidades_medida
 */
class Existencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'existencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_existencia', 'fecha_entradas', 'fecha_salida', 'id_Producto', 'id_unidades_medida'], 'required'],
            [['id_existencia', 'id_Producto', 'id_unidades_medida'], 'integer'],
            [['fecha_entradas', 'fecha_salida'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_existencia' => 'Id Existencia',
            'fecha_entradas' => 'Fecha Entradas',
            'fecha_salida' => 'Fecha Salida',
            'id_Producto' => 'Id  Producto',
            'id_unidades_medida' => 'Id Unidades Medida',
        ];
    }
}
