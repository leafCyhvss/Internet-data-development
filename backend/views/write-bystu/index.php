<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WriteBystuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Write Bystus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="write-bystu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Write Bystu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'student_id',
            'news_date',
            'news_num',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
