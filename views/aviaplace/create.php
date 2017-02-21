<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\komer45\avia\models\AviaPlace */

$this->title = 'Create Avia Place';
$this->params['breadcrumbs'][] = ['label' => 'Avia Places', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avia-place-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
