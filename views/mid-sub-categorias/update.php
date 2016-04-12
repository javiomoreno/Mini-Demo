<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MidSubCategorias */

$this->title = 'Editar: ' . $model->sucanomb;
$this->params['breadcrumbs'][] = ['label' => 'Sub Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sucanomb, 'url' => ['view', 'id' => $model->sucaiden]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="mid-sub-categorias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
