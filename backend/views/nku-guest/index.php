<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NkuGuestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nku Guests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-guest-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nku Guest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'guest_id',
            'guest_name',
            'guest_job',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>