<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Coordena $model */

$this->title = $model->USUARIO_ID;
$this->params['breadcrumbs'][] = ['label' => 'Coordenas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="coordena-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'USUARIO_ID' => $model->USUARIO_ID, 'CURSO_ID' => $model->CURSO_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'USUARIO_ID' => $model->USUARIO_ID, 'CURSO_ID' => $model->CURSO_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'USUARIO_ID',
            'CURSO_ID',
            'INICIO',
            'FIM',
        ],
    ]) ?>

</div>
