<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231209
 * CRUD
 */
use yii\helpers\Html;

/* @var $this yii\web\View */


$this->title = 'Update ChElement: ' . $model->ceid;
$this->params['breadcrumbs'][] = ['label' => 'ChElements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ceid, 'url' => ['view', 'id' => $model->ceid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chelement-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
