<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231210
 * CRUD
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detection */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detection-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'deplace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dejingwei')->textInput() ?>

    <?= $form->field($model, 'deaverage')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
