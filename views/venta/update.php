<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\venta */

$this->title = 'Update Venta: ' . $model->id_venta;
$this->params['breadcrumbs'][] = ['label' => 'Ventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_venta, 'url' => ['view', 'id' => $model->id_venta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="venta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
