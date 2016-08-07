<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Unidades_medidaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unidades-medida-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_unidades_medida') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'id_detalle_compra') ?>

    <?= $form->field($model, 'id_producto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
