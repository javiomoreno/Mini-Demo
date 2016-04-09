<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MidCategorias */

$this->title = 'Update Mid Categorias: ' . $model->cateiden;
$this->params['breadcrumbs'][] = ['label' => 'Mid Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cateiden, 'url' => ['view', 'id' => $model->cateiden]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mid-categorias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
