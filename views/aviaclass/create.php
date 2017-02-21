<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\komer45\avia\models\AviaClass */

$this->title = 'Create Avia Class';
$this->params['breadcrumbs'][] = ['label' => 'Avia Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avia-class-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
