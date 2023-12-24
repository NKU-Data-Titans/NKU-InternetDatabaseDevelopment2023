<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231210
 * CRUD
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sea */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sea-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'wname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wsymbol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wdescription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wimg')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
