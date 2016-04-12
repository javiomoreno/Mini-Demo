<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\MidSubCategoriasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mid-sub-categorias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sucaiden') ?>

    <?= $form->field($model, 'mid_categorias_cateiden') ?>

    <?= $form->field($model, 'sucanomb') ?>

    <?= $form->field($model, 'sucadesc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
