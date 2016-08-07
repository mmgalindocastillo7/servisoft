<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ubicacion_cava */

$this->title = 'Create Ubicacion Cava';
$this->params['breadcrumbs'][] = ['label' => 'Ubicacion Cavas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ubicacion-cava-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
