<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\venta */
/* @var $form ActiveForm */
?>
<div class="venta">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_venta') ?>
        <?= $form->field($model, 'total_venta') ?>
        <?= $form->field($model, 'tipo_negocio') ?>
        <?= $form->field($model, 'id_cliente') ?>
        <?= $form->field($model, 'id_pago') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- venta -->
