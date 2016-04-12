<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MidSubCategorias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mid-sub-categorias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mid_categorias_cateiden')->textInput() ?>

    <?= $form->field($model, 'sucanomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sucadesc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
