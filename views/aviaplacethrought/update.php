<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\komer45\avia\models\AviaThroughtPlace */

$this->title = 'Update Avia Throught Place: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Avia Throught Places', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="avia-throught-place-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
