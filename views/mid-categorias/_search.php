<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\MidCategoriasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mid-categorias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cateiden') ?>

    <?= $form->field($model, 'mid_usuarios_usuaiden') ?>

    <?= $form->field($model, 'catenomb') ?>

    <?= $form->field($model, 'catedesc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
