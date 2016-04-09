<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\MidUsuariosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mid-usuarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'usuaiden') ?>

    <?= $form->field($model, 'mid_sexos_sexoiden') ?>

    <?= $form->field($model, 'mid_tiposUsuarios_tiusiden') ?>

    <?= $form->field($model, 'usuanomb') ?>

    <?= $form->field($model, 'usuaapel') ?>

    <?php // echo $form->field($model, 'usuacedu') ?>

    <?php // echo $form->field($model, 'usuatele') ?>

    <?php // echo $form->field($model, 'usuadire') ?>

    <?php // echo $form->field($model, 'usuauser') ?>

    <?php // echo $form->field($model, 'useapass') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
