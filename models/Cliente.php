<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property string $id_cliente
 * @property string $Codigo
 * @property integer $estado
 * @property string $tipo_cliente
 * @property string $razon_social
 * @property string $direccion
 * @property string $nombre_negocio
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cliente', 'Codigo', 'estado', 'tipo_cliente', 'razon_social', 'direccion', 'nombre_negocio'], 'required'],
            [['id_cliente', 'estado', 'tipo_cliente'], 'integer'],
            [['Codigo', 'razon_social', 'direccion', 'nombre_negocio'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cliente' => 'Id Cliente',
            'Codigo' => 'Codigo',
            'estado' => 'Estado',
            'tipo_cliente' => 'Tipo Cliente',
            'razon_social' => 'Razon Social',
            'direccion' => 'Direccion',
            'nombre_negocio' => 'Nombre Negocio',
        ];
    }
}
