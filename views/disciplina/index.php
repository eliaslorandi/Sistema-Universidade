<?php

use app\models\Disciplina;
use app\models\Matriz;
use app\models\Nucleo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DisciplinaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Disciplinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disciplina-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nova Disciplina', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'ID',
            [
                'attribute' => 'NOME',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Campo de busca'
                ],

            ],


            'CH',
            'PERIODO',
            [
                'attribute' => 'nucleo.NOME', //mesmo na funcao get em models nucleo estando em maiusculo, irá buscar em minusculo
                'label' => 'Núcleo',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'nucleo.NOME',                                                  //procurar, mostrar
                    ArrayHelper::map(Nucleo::find()->asArray()->orderby('NOME')->All(), 'NOME', 'NOME'), //chamar arrayhelper e nucleo
                    ['class' => 'form-control', 'prompt' => 'Selecione um Núcleo'] //tipo placeholder
                ),
            ],
            [
                'attribute' => 'matriz.SIGLA',
                'label' => 'Matriz',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'matriz.SIGLA',
                    ArrayHelper::map(Matriz::find()->asArray()->orderby('SIGLA')->All(), 'SIGLA', 'SIGLA'),
                    ['class' => 'form-control', 'prompt' => 'Selecione uma Matriz'] //tipo placeholder
                ),
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Disciplina $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                }
            ],
        ],
    ]); ?>


</div>