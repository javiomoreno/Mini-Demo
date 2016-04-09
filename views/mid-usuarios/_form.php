<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MidUsuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mid-usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mid_sexos_sexoiden')->textInput() ?>

    <?= $form->field($model, 'mid_tiposUsuarios_tiusiden')->textInput() ?>

    <?= $form->field($model, 'usuanomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuaapel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuacedu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuatele')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuadire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuauser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuapass')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
