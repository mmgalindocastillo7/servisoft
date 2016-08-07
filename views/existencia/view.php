<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Existencia */

$this->title = $model->id_existencia;
$this->params['breadcrumbs'][] = ['label' => 'Existencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="existencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_existencia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_existencia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_existencia',
            'fecha_entradas',
            'fecha_salida',
            'id_Producto',
            'id_unidades_medida',
        ],
    ]) ?>

</div>
