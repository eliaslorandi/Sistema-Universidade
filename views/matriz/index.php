<?php

use app\models\Matriz;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MatrizSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Matrizs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matriz-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Matriz', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'SIGLA',
            'CH_TOTAL',
            'CURSO_ID',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Matriz $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
