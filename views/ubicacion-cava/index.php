<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Ubicacion_cavaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ubicacion Cavas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ubicacion-cava-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ubicacion Cava', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ubicacion_cava',
            'cantidad',
            'merma',
            'fecha_entrada',
            'id_existencia',
            // 'id_cava',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
