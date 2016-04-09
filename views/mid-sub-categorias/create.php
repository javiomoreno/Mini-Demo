<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MidSubCategorias */

$this->title = 'Create Mid Sub Categorias';
$this->params['breadcrumbs'][] = ['label' => 'Mid Sub Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mid-sub-categorias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
