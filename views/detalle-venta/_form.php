<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\detalle_venta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-venta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_detalle_venta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_venta_Existencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pagos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_venta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_existencias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_producto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
