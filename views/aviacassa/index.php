<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\komer45\avia\models\SearchAviaCassa */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Avia Cassas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avia-cassa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Avia Cassa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'reise_number',
            'date_time',
            'final_distinct',
            'time_in_travel:datetime',
            // 'class',
            // 'cost',
            // 'places',
            // 'dostup',
            // 'distinct_throught',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
