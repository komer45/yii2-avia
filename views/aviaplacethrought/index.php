<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\komer45\avia\models\SearchAviaThroughtPlace */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Avia Throught Places';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avia-throught-place-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Avia Throught Place', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'date_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
