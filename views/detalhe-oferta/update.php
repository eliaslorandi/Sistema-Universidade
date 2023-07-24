<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DetalheOferta $model */

$this->title = 'Update Detalhe Oferta: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Detalhe Ofertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detalhe-oferta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
