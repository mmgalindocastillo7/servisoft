<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\unidades_medida */

$this->title = 'Update Unidades Medida: ' . $model->id_unidades_medida;
$this->params['breadcrumbs'][] = ['label' => 'Unidades Medidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_unidades_medida, 'url' => ['view', 'id' => $model->id_unidades_medida]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unidades-medida-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
