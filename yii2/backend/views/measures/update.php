<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231210
 * CRUD
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Measures */

$this->title = 'Update Measures: ' . $model->mid;
$this->params['breadcrumbs'][] = ['label' => 'Damages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mid, 'url' => ['view', 'id' => $model->mid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="measures-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
