<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\detalle_Compra */
/* @var $form ActiveForm */
?>
<div class="detalle_compra">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_detalle_compra') ?>
        <?= $form->field($model, 'id_compra') ?>
        <?= $form->field($model, 'id_producto') ?>
        <?= $form->field($model, 'cantidad') ?>
        <?= $form->field($model, 'unidad_medidas') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- detalle_compra -->
