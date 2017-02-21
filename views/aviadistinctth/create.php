<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\komer45\avia\models\AviaDistinctTh */

$this->title = 'Create Avia Distinct Th';
$this->params['breadcrumbs'][] = ['label' => 'Avia Distinct Ths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avia-distinct-th-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
