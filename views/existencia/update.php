<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Existencia */

$this->title = 'Update Existencia: ' . $model->id_existencia;
$this->params['breadcrumbs'][] = ['label' => 'Existencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_existencia, 'url' => ['view', 'id' => $model->id_existencia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="existencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
