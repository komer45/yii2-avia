<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\komer45\avia\models\AviaDistinctTh */

$this->title = 'Update Avia Distinct Th: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Avia Distinct Ths', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="avia-distinct-th-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
