<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\unidades_medida */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unidades-medida-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_unidades_medida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_detalle_compra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_producto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
