<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pago */
/* @var $form ActiveForm */
?>
<div class="pago">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_pago') ?>
        <?= $form->field($model, 'comprobante') ?>
        <?= $form->field($model, 'codigo_cliente') ?>
        <?= $form->field($model, 'estado') ?>
        <?= $form->field($model, 'valor_total') ?>
        <?= $form->field($model, 'id_venta') ?>
        <?= $form->field($model, 'fecha_vencimiento') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- pago -->
