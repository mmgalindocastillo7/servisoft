<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\compraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compra-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_compra') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'valor_total') ?>

    <?= $form->field($model, 'valor_unitario') ?>

    <?php // echo $form->field($model, 'proveedor_id') ?>

    <?php // echo $form->field($model, 'proveedor_id1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
