<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Coordena $model */

$this->title = 'Update Coordena: ' . $model->USUARIO_ID;
$this->params['breadcrumbs'][] = ['label' => 'Coordenas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->USUARIO_ID, 'url' => ['view', 'USUARIO_ID' => $model->USUARIO_ID, 'CURSO_ID' => $model->CURSO_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="coordena-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
