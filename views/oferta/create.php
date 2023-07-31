<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Oferta $model */

$this->title = 'Nova Oferta';
$this->params['breadcrumbs'][] = ['label' => 'Ofertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oferta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
