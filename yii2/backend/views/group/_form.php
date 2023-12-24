<?php
/**
 * Team: NKU Data Titans
 * Coding by 武桐西 2112515, 20231209
 * CRUD
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Group */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gdate')->textInput() ?>

    <?= $form->field($model, 'gschool')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gdescription')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
