<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\existencia_venta */

$this->title = 'Create Existencia Venta';
$this->params['breadcrumbs'][] = ['label' => 'Existencia Ventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="existencia-venta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
