<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_producto') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'valor_unitario') ?>

    <?= $form->field($model, 'imagen') ?>

    <?php // echo $form->field($model, 'id_tipo_producto') ?>

    <?php // echo $form->field($model, 'id_unidades_medidas') ?>

    <?php // echo $form->field($model, 'id_pedido') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
