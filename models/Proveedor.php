<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proveedor".
 *
 * @property string $id_proveedor
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono
 * @property string $direccion
 * @property string $estado
 * @property string $documento
 */
class Proveedor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proveedor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_proveedor', 'nombre', 'apellido', 'telefono', 'direccion', 'estado', 'documento'], 'required'],
            [['id_proveedor'], 'integer'],
            [['nombre', 'apellido', 'telefono', 'direccion', 'estado', 'documento'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_proveedor' => 'Id Proveedor',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'telefono' => 'Telefono',
            'direccion' => 'Direccion',
            'estado' => 'Estado',
            'documento' => 'Documento',
        ];
    }
}
