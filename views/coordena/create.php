<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Coordena $model */

$this->title = 'Create Coordena';
$this->params['breadcrumbs'][] = ['label' => 'Coordenas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordena-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
