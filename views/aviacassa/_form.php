<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\komer45\avia\models\AviaCassa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avia-cassa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reise_number')->textInput() ?>

    <?= $form->field($model, 'date_time')->textInput() ?>

    <?= $form->field($model, 'final_distinct')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_in_travel')->textInput() ?>

    <?= $form->field($model, 'class')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'places')->textInput() ?>

    <?= $form->field($model, 'dostup')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'distinct_throught')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
