<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\komer45\avia\models\AviaPlace */

$this->title = 'Update Avia Place: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Avia Places', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="avia-place-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
