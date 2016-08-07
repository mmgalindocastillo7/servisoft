<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ubicacion_cava */

$this->title = 'Update Ubicacion Cava: ' . $model->id_ubicacion_cava;
$this->params['breadcrumbs'][] = ['label' => 'Ubicacion Cavas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ubicacion_cava, 'url' => ['view', 'id' => $model->id_ubicacion_cava]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ubicacion-cava-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
