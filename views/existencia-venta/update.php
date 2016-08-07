<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\existencia_venta */

$this->title = 'Update Existencia Venta: ' . $model->id_existencia_venta;
$this->params['breadcrumbs'][] = ['label' => 'Existencia Ventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_existencia_venta, 'url' => ['view', 'id' => $model->id_existencia_venta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="existencia-venta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
