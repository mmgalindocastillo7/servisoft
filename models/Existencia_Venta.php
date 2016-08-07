<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "existencia_venta".
 *
 * @property string $id_existencia_venta
 * @property string $id_venta
 * @property string $id_existencia
 */
class Existencia_Venta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'existencia_venta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_existencia_venta', 'id_venta', 'id_existencia'], 'required'],
            [['id_existencia_venta', 'id_venta', 'id_existencia'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_existencia_venta' => 'Id Existencia Venta',
            'id_venta' => 'Id Venta',
            'id_existencia' => 'Id Existencia',
        ];
    }
}
