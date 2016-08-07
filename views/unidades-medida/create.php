<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\unidades_medida */

$this->title = 'Create Unidades Medida';
$this->params['breadcrumbs'][] = ['label' => 'Unidades Medidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidades-medida-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
