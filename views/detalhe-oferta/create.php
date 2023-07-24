<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DetalheOferta $model */

$this->title = 'Create Detalhe Oferta';
$this->params['breadcrumbs'][] = ['label' => 'Detalhe Ofertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalhe-oferta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
