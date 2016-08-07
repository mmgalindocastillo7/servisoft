<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Compra */
/* @var $form ActiveForm */
?>
<div class="Compra">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_compra') ?>
        <?= $form->field($model, 'cantidad') ?>
        <?= $form->field($model, 'fecha') ?>
        <?= $form->field($model, 'valor_total') ?>
        <?= $form->field($model, 'valor_unitario') ?>
        <?= $form->field($model, 'proveedor_id') ?>
        <?= $form->field($model, 'proveedor_id1') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Compra -->
