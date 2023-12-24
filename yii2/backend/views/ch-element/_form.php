<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231209
 * CRUD
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChElement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chelement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ceid')->textInput() ?>

    <?= $form->field($model, 'cename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cesymbol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cedescription')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
