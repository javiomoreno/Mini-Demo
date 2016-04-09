<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Mini-Demo',
        'brandUrl' => ['/administrador/index'],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Inicio', 'url' => ['/administrador/index']],
        array('label'=>'Usuarios', 'url'=>array('#'),
                            'items' => array(
                            array('label' => 'Crear Usuario', 'url' => array('/mid-usuarios/create')),
                            array('label' => 'Ver Usuarios', 'url' => array('/mid-usuarios/index')))),
        array('label'=>'Categorias', 'url'=>array('#'),
                            'items' => array(
                            array('label' => 'Crear Categoria', 'url' => array('/mid-categorias/create')),
                            array('label' => 'Ver Categorias', 'url' => array('/mid-categorias/index')))),
        array('label'=>'Sub Categorias', 'url'=>array('#'),
                            'items' => array(
                            array('label' => 'Crear Sub Categoria', 'url' => array('/mid-sub-categorias/create')),
                            array('label' => 'Ver Sub Categorias', 'url' => array('/mid-sub-categorias/index')))),
    ];
    if (!Yii::$app->user->isGuest) {
        $menuItems[] = [
            'label' => 'Salir (' . Yii::$app->user->identity->usuauser . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Mini-Demo <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
