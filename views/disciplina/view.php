<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Disciplina $model */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Disciplinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="disciplina-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja excluir esta disciplina?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'ID',
            'NOME',
            'CH',
            'PERIODO',
            [
                'attribute'=>'nucleo.NOME', //mesmo na funcao get em models nucleo estando em maiusculo, irá buscar em minusculo
                'label'=>'Núcleo'
            ],
            [
                'attribute'=>'matriz.SIGLA',
                'label'=>'Matriz'
            ],
        ],
    ]) ?>

</div>