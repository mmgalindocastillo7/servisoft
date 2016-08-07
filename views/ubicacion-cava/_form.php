<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ubicacion_cava */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ubicacion-cava-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ubicacion_cava')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'merma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_entrada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_existencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_cava')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
