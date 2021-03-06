<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MidSubCategoriasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Categorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mid-sub-categorias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nueva Sub Categoria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sucanomb',
            'sucadesc',
            'midCategoriasCateiden.catenomb',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
