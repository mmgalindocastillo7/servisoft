<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cava */
/* @var $form ActiveForm */
?>
<div class="Cava">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_cava') ?>
        <?= $form->field($model, 'numero_cava') ?>
        <?= $form->field($model, 'unidades_medidas_id') ?>
        <?= $form->field($model, 'capacida') ?>
        <?= $form->field($model, 'ubicacion_cava_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Cava -->
