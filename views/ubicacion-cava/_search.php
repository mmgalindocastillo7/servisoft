<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ubicacion_cavaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ubicacion-cava-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ubicacion_cava') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'merma') ?>

    <?= $form->field($model, 'fecha_entrada') ?>

    <?= $form->field($model, 'id_existencia') ?>

    <?php // echo $form->field($model, 'id_cava') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
