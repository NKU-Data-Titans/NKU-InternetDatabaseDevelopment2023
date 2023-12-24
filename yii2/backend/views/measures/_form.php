<?php

/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231210
 * CRUD
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Measures */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="measures-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mdescription')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
