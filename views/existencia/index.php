<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExistenciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Existencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="existencia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Existencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_existencia',
            'fecha_entradas',
            'fecha_salida',
            'id_Producto',
            'id_unidades_medida',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
