<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\komer45\avia\models\AviaCassa */

$this->title = 'Create Avia Cassa';
$this->params['breadcrumbs'][] = ['label' => 'Avia Cassas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avia-cassa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
