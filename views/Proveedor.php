<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedor */
/* @var $form ActiveForm */
?>
<div class="Proveedor">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_proveedor') ?>
        <?= $form->field($model, 'nombre') ?>
        <?= $form->field($model, 'apellido') ?>
        <?= $form->field($model, 'telefono') ?>
        <?= $form->field($model, 'direccion') ?>
        <?= $form->field($model, 'estado') ?>
        <?= $form->field($model, 'documento') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Proveedor -->
