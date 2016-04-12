<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Recuperar Datos';
?>

<div class="registrar-form">
    <div class="container">
      <h1><?= Html::encode($this->title) ?></h1>

      <?php if (Yii::$app->session->hasFlash('enviado')): ?>

          <div class="alert alert-success">
              Ya fue enviada su informacion al correo
          </div>

      <?php elseif (Yii::$app->session->hasFlash('noEnviado')): ?>
        <div class="alert alert-danger">
            No se encontro esa dirección de correo registrada
        </div>
      <?php endif; ?>
      <?php $form = ActiveForm::begin(); ?>

      <div class="row">
        <div class="col-lg-6">
          <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
      </div>
      <div class="form-group">
          <?= Html::submitButton('Enviar Datos', ['class' => 'btn btn-success']) ?>
      </div>

      <?php ActiveForm::end(); ?>      
    </div>
</div>
