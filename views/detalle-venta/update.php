<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\detalle_venta */

$this->title = 'Update Detalle Venta: ' . $model->id_detalle_venta;
$this->params['breadcrumbs'][] = ['label' => 'Detalle Ventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detalle_venta, 'url' => ['view', 'id' => $model->id_detalle_venta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detalle-venta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
