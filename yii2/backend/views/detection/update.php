<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231210
 * CRUD
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detection */

$this->title = 'Update Detection: ' . $model->deid;
$this->params['breadcrumbs'][] = ['label' => 'Detections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deid, 'url' => ['view', 'id' => $model->deid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detection-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
