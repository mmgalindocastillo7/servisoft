<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\detalle_compra */

$this->title = 'Create Detalle Compra';
$this->params['breadcrumbs'][] = ['label' => 'Detalle Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-compra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
