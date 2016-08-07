<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pago */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pago-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pago')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comprobante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigo_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valor_total')->textInput() ?>

    <?= $form->field($model, 'fecha_vencimiento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_venta')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
