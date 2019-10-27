<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'author_id',

            [
                'attribute' => 'authorFullName',
                'value' => function($model) {
                    return $authorName = $model->author->name . ' ' . $model->author->surname;;
                }
            ],
//            'authorName',
            'title',
            'numbers_of_pages',
            'genre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
