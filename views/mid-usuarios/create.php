<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MidUsuarios */

$this->title = 'Create Mid Usuarios';
$this->params['breadcrumbs'][] = ['label' => 'Mid Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mid-usuarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
