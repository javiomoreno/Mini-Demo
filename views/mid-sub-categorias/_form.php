<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MidSubCategorias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mid-sub-categorias-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
      <div class="col-lg-6">
        <?= $form->field($model, 'sucanomb')->textInput(['maxlength' => true]) ?>
      </div>
      <div class="col-lg-6">
        <?= $form->field($model, 'mid_categorias_cateiden')->dropDownList($model->listaCategorias, ['prompt' => 'Seleccione Categoria' ]);?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <?= $form->field($model, 'sucadesc')->textInput(['maxlength' => true]) ?>
      </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Editar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
