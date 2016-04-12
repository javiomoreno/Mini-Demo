<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Mini-Demo';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Mini-Demo!</h1>

        <p>
          Bienvenido
        </p>
        <?php echo Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-pencil', 'style'=>'padding-right: 10px;']).'Registrarse', ['/site/registrar'], ['class'=> 'btn btn-success'] );?>
        <?php echo Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-lock', 'style'=>'padding-right: 10px;']).'Iniciar Sesión', ['/site/login'], ['class'=> 'btn btn-success'] );?>
    </div>

    <div class="body-content">

    </div>
</div>
