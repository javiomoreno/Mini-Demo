<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MidUsuarios */

$this->title = $model->usuaiden;
$this->params['breadcrumbs'][] = ['label' => 'Mid Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mid-usuarios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->usuaiden], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->usuaiden], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'usuaiden',
            'mid_sexos_sexoiden',
            'mid_tiposUsuarios_tiusiden',
            'usuanomb',
            'usuaapel',
            'usuacedu',
            'usuatele',
            'usuadire',
            'usuauser',
            'useapass',
        ],
    ]) ?>

</div>
