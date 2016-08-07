<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\estado_pedido */

$this->title = 'Update Estado Pedido: ' . $model->id_pedido;
$this->params['breadcrumbs'][] = ['label' => 'Estado Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pedido, 'url' => ['view', 'id' => $model->id_pedido]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estado-pedido-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
