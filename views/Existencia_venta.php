<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\existencia_venta */
/* @var $form ActiveForm */
?>
<div class="Existencia_venta">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_existencia_venta') ?>
        <?= $form->field($model, 'id_venta') ?>
        <?= $form->field($model, 'id_existencia') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Existencia_venta -->
