<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Disciplina $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="disciplina-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CH')->textInput() ?>

    <?= $form->field($model, 'PERIODO')->textInput() ?>

    <?= $form->field($model, 'NUCLEO_ID')->textInput() ?>

    <?= $form->field($model, 'MATRIZ_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
