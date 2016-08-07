<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\detalle_venta */
/* @var $form ActiveForm */
?>
<div class="detalle_venta">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_detalle_venta') ?>
        <?= $form->field($model, 'id_venta_Existencia') ?>
        <?= $form->field($model, 'id_pagos') ?>
        <?= $form->field($model, 'id_venta') ?>
        <?= $form->field($model, 'id_existencias') ?>
        <?= $form->field($model, 'id_producto') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- detalle_venta -->
