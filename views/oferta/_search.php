<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\OfertaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="oferta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'SEMESTRE_INICIO') ?>

    <?= $form->field($model, 'MATRIZ_ID') ?>

    <?= $form->field($model, 'USUARIO_ID') ?>

    <?= $form->field($model, 'DATA_REGISTRO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
