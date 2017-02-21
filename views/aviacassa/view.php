<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\komer45\avia\models\AviaCassa */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Avia Cassas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avia-cassa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'reise_number',
            'date_time',
            'final_distinct',
            'time_in_travel:datetime',
            'class',
            'cost',
            'places',
            'dostup',
            'distinct_throught',
        ],
    ]) ?>

</div>
