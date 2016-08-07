<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CavaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cava-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_cava') ?>

    <?= $form->field($model, 'numero_cava') ?>

    <?= $form->field($model, 'unidades_medidas_id') ?>

    <?= $form->field($model, 'capacida') ?>

    <?= $form->field($model, 'ubicacion_cava_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
