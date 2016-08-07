<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ubicacion_cava */
/* @var $form ActiveForm */
?>
<div class="ubicacion_cava">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_ubicacion_cava') ?>
        <?= $form->field($model, 'cantidad') ?>
        <?= $form->field($model, 'merma') ?>
        <?= $form->field($model, 'fecha_entrada') ?>
        <?= $form->field($model, 'id_existencia') ?>
        <?= $form->field($model, 'id_cava') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ubicacion_cava -->
