<?php

/* @var $this yii\web\View */

$this->title = 'Administrative Panel';

use yii\helpers\Html; ?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Hello <?= Yii::$app->user->identity->username ?>!</h1>

        <h2>Let's start</h2>

    </div>
    <div class="text-center">
        <?= Html::a('Authors', ['/author/index'], ['class'=>'btn-lg btn-primary lg']) ?>
        <?= Html::a('Books', ['/book/index'], ['class'=>'btn-lg btn-success lg']) ?>
    </div>


</div>
