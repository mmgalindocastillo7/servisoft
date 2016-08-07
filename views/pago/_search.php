<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PagoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pago-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pago') ?>

    <?= $form->field($model, 'comprobante') ?>

    <?= $form->field($model, 'codigo_cliente') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'valor_total') ?>

    <?php // echo $form->field($model, 'fecha_vencimiento') ?>

    <?php // echo $form->field($model, 'id_venta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
