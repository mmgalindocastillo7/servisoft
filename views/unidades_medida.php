<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\unidades_medida */
/* @var $form ActiveForm */
?>
<div class="unidades_medida">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_unidades_medida') ?>
        <?= $form->field($model, 'descripcion') ?>
        <?= $form->field($model, 'estado') ?>
        <?= $form->field($model, 'id_detalle_compra') ?>
        <?= $form->field($model, 'id_producto') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- unidades_medida -->
