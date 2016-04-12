<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MidCategorias */

$this->title = 'Editar: ' . $model->catenomb;
$this->params['breadcrumbs'][] = ['label' => 'Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->catenomb, 'url' => ['view', 'id' => $model->cateiden]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="mid-categorias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
