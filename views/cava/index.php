<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CavaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cavas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cava-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cava', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_cava',
            'numero_cava',
            'unidades_medidas_id',
            'capacida',
            'ubicacion_cava_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
