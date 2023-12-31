<?php
/**
 * Coding by 周钰宸2111408
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eplace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ecount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'econtent')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
