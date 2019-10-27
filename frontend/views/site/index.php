<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Library';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to the library!</h1>
    </div>
    <div class="text-center">
        <?= Html::a('Go to the library', ['/site/view-library'], ['class'=>'btn-lg btn-primary lg']) ?>
    </div>

</div>
