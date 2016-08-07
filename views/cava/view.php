<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cava */

$this->title = $model->id_cava;
$this->params['breadcrumbs'][] = ['label' => 'Cavas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cava-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_cava], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_cava], [
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
            'id_cava',
            'numero_cava',
            'unidades_medidas_id',
            'capacida',
            'ubicacion_cava_id',
        ],
    ]) ?>

</div>
