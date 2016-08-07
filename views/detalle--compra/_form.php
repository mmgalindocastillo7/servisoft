<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\detalle_compra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-compra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_detalle_compra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_compra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_producto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <?= $form->field($model, 'unidad_medidas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
