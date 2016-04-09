<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MidSubCategorias */

$this->title = 'Update Mid Sub Categorias: ' . $model->sucaiden;
$this->params['breadcrumbs'][] = ['label' => 'Mid Sub Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sucaiden, 'url' => ['view', 'id' => $model->sucaiden]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mid-sub-categorias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
