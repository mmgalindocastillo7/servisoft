<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cava */

$this->title = 'Create Cava';
$this->params['breadcrumbs'][] = ['label' => 'Cavas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cava-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
