<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\estado_pedido */
/* @var $form ActiveForm */
?>
<div class="estado_pendido">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_pedido') ?>
        <?= $form->field($model, 'descripcion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- estado_pendido -->
