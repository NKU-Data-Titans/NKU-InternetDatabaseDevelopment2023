<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231210
 * CRUD
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SeaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sea-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'wid') ?>

    <?= $form->field($model, 'wname') ?>

    <?= $form->field($model, 'wsymbol') ?>

    <?= $form->field($model, 'wdescription') ?>

    <?= $form->field($model, 'wimg') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
