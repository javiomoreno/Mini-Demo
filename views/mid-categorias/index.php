<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MidCategoriasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mid Categorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mid-categorias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mid Categorias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cateiden',
            'mid_usuarios_usuaiden',
            'catenomb',
            'catedesc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
