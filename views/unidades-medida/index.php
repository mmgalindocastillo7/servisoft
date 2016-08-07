<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Unidades_medidaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unidades Medidas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidades-medida-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Unidades Medida', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_unidades_medida',
            'descripcion',
            'estado',
            'id_detalle_compra',
            'id_producto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
