<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Matriz $model */

$this->title = 'Create Matriz';
$this->params['breadcrumbs'][] = ['label' => 'Matrizs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matriz-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
