<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MidUsuarios */

$this->title = 'Update Mid Usuarios: ' . $model->usuaiden;
$this->params['breadcrumbs'][] = ['label' => 'Mid Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->usuaiden, 'url' => ['view', 'id' => $model->usuaiden]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mid-usuarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
