<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cava */

$this->title = 'Update Cava: ' . $model->id_cava;
$this->params['breadcrumbs'][] = ['label' => 'Cavas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_cava, 'url' => ['view', 'id' => $model->id_cava]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cava-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
