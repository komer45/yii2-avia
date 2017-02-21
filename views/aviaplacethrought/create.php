<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\komer45\avia\models\AviaThroughtPlace */

$this->title = 'Create Avia Throught Place';
$this->params['breadcrumbs'][] = ['label' => 'Avia Throught Places', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avia-throught-place-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
