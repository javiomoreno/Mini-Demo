<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Registrar';
?>

<div class="registrar-form">
    <div class="container">
      <h1><?= Html::encode($this->title) ?></h1>

      <?php $form = ActiveForm::begin(); ?>

      <div class="row">
        <div class="col-lg-6">
          <?= $form->field($model, 'usuanomb')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6">
          <?= $form->field($model, 'usuaapel')->textInput(['maxlength' => true]) ?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <?= $form->field($model, 'usuacedu')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6">
          <?= $form->field($model, 'usuatele')->textInput(['maxlength' => true]) ?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <?= $form->field($model, 'usuadire')->textInput(['maxlength' => true]) ?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <?= $form->field($model, 'usuauser')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6">
          <?= $form->field($model, 'usuapass')->passwordInput(['maxlength' => true]) ?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <?= $form->field($model, 'mid_sexos_sexoiden')->dropDownList($model->listaSexos, ['prompt' => 'Seleccione Sexo' ]);?>
        </div>
      </div>

      <div class="form-group">
          <?= Html::submitButton($model->isNewRecord ? 'Registrar' : '', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      </div>

      <?php ActiveForm::end(); ?>
    </div>
</div>
