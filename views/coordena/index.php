<?php

use app\models\Coordena;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CoordenaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Coordenas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordena-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Coordena', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'USUARIO_ID',
            'CURSO_ID',
            'INICIO',
            'FIM',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Coordena $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'USUARIO_ID' => $model->USUARIO_ID, 'CURSO_ID' => $model->CURSO_ID]);
                 }
            ],
        ],
    ]); ?>


</div>
