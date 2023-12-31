<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5 signup-custom">
            <?php $form = ActiveForm::begin([
                'id' => 'form-signup',
                ]); ?>

                <div class="signup_login_label">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                </div>

                <div class="signup_login_label">
                <?= $form->field($model, 'email') ?>
                </div>

                <div class="signup_login_label">
                <?= $form->field($model, 'password')->passwordInput() ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
