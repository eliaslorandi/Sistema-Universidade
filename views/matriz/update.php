<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Matriz $model */

$this->title = 'Update Matriz: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Matrizs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matriz-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
