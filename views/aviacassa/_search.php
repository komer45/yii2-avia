<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\komer45\avia\models\SearchAviaCassa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avia-cassa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'reise_number') ?>

    <?= $form->field($model, 'date_time') ?>

    <?= $form->field($model, 'final_distinct') ?>

    <?= $form->field($model, 'time_in_travel') ?>

    <?php // echo $form->field($model, 'class') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'places') ?>

    <?php // echo $form->field($model, 'dostup') ?>

    <?php // echo $form->field($model, 'distinct_throught') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
