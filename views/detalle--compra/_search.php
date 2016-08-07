<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\detalle_compraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-compra-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_detalle_compra') ?>

    <?= $form->field($model, 'id_compra') ?>

    <?= $form->field($model, 'id_producto') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'unidad_medidas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
