<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Producto */
/* @var $form ActiveForm */
?>
<div class="Producto">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_producto') ?>
        <?= $form->field($model, 'estado') ?>
        <?= $form->field($model, 'imagen') ?>
        <?= $form->field($model, 'id_tipo_producto') ?>
        <?= $form->field($model, 'id_unidades_medidas') ?>
        <?= $form->field($model, 'id_pedido') ?>
        <?= $form->field($model, 'valor_unitario') ?>
        <?= $form->field($model, 'descripcion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Producto -->
