<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExistenciaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="existencia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_existencia') ?>

    <?= $form->field($model, 'fecha_entradas') ?>

    <?= $form->field($model, 'fecha_salida') ?>

    <?= $form->field($model, 'id_Producto') ?>

    <?= $form->field($model, 'id_unidades_medida') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
