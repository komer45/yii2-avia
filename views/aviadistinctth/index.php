<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\komer45\avia\models\SearchAviaDistinctTh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Avia Distinct Ths';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avia-distinct-th-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Avia Distinct Th', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
