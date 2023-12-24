<?php
/**
 * Coding by 周钰宸2111408
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Event */
$this->title = 'Update Event: ' . $model->eid;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->eid, 'url' => ['view', 'id' => $model->eid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="event-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
