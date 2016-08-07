<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pedido */
/* @var $form ActiveForm */
?>
<div class="Pedido">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'tipo_producto') ?>
        <?= $form->field($model, 'codigo_cliente') ?>
        <?= $form->field($model, 'fecha_venta') ?>
        <?= $form->field($model, 'valor_pedido') ?>
        <?= $form->field($model, 'cantidad') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Pedido -->
