<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado_pedido".
 *
 * @property integer $id_pedido
 * @property string $descripcion
 */
class estado_pedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado_pedido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pedido'], 'required'],
            [['id_pedido'], 'integer'],
            [['descripcion'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pedido' => 'Id Pedido',
            'descripcion' => 'Descripcion',
        ];
    }
}
