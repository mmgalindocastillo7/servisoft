<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detalle_ventaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-venta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_detalle_venta') ?>

    <?= $form->field($model, 'id_venta_Existencia') ?>

    <?= $form->field($model, 'id_pagos') ?>

    <?= $form->field($model, 'id_venta') ?>

    <?= $form->field($model, 'id_existencias') ?>

    <?php // echo $form->field($model, 'id_producto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
