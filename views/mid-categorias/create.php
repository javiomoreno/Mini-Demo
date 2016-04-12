<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MidCategorias */

$this->title = 'Create Mid Categorias';
$this->params['breadcrumbs'][] = ['label' => 'Mid Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mid-categorias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
