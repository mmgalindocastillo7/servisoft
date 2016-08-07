<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Existencia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="existencia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_existencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_entradas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_salida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_Producto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_unidades_medida')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
