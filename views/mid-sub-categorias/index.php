<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MidSubCategoriasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mid Sub Categorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mid-sub-categorias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mid Sub Categorias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sucaiden',
            'mid_categorias_cateiden',
            'sucanomb',
            'sucadesc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
