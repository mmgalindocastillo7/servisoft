<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Existencia */

$this->title = 'Create Existencia';
$this->params['breadcrumbs'][] = ['label' => 'Existencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="existencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
