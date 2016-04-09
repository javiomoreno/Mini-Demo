<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MidUsuariosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mid Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mid-usuarios-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mid Usuarios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'usuaiden',
            'mid_sexos_sexoiden',
            'mid_tiposUsuarios_tiusiden',
            'usuanomb',
            'usuaapel',
            // 'usuacedu',
            // 'usuatele',
            // 'usuadire',
            // 'usuauser',
            // 'useapass',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
