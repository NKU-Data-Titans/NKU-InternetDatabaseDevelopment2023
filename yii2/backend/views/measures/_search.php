<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231210
 * CRUD
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DamageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="measures-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'mid') ?>

    <?= $form->field($model, 'mname') ?>

    <?= $form->field($model, 'mdescription') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
