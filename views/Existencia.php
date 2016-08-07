<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\existencia */
/* @var $form ActiveForm */
?>
<div class="Existencia">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_existencia') ?>
        <?= $form->field($model, 'fecha_entradas') ?>
        <?= $form->field($model, 'fecha_salida') ?>
        <?= $form->field($model, 'id_Producto') ?>
        <?= $form->field($model, 'id_unidades_medida') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Existencia -->
