<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form ActiveForm */
?>
<div class="Cliente">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_cliente') ?>
        <?= $form->field($model, 'Codigo') ?>
        <?= $form->field($model, 'estado') ?>
        <?= $form->field($model, 'tipo_cliente') ?>
        <?= $form->field($model, 'razon_social') ?>
        <?= $form->field($model, 'direccion') ?>
        <?= $form->field($model, 'nombre_negocio') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Cliente -->
