<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\venta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_venta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_venta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_negocio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pago')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
