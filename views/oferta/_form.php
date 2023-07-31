<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Oferta $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="oferta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SEMESTRE_INICIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MATRIZ_ID')->textInput() ?>

    <?= $form->field($model, 'USUARIO_ID')->textInput() ?>

    <?= $form->field($model, 'DATA_REGISTRO')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
