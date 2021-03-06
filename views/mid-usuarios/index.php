<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MidUsuariosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mid-usuarios-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nuevo Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'usuanomb',
            'usuaapel',
            // 'usuacedu',
            // 'usuatele',
            // 'usuadire',
             'usuauser',
            // 'useapass',
            'midSexosSexoiden.sexonomb',
            'midTiposUsuariosTiusiden.tiusnomb',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
