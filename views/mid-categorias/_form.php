<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MidCategorias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mid-categorias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'catenomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catedesc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Editar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
