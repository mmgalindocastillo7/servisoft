<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Existencia_ventaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Existencia Ventas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="existencia-venta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Existencia Venta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_existencia_venta',
            'id_venta',
            'id_existencia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
