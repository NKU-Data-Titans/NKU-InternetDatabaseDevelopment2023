<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231210
 * CRUD
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\sea */

$this->title = 'Update sea: ' . $model->wid;
$this->params['breadcrumbs'][] = ['label' => 'Sea', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->wid, 'url' => ['view', 'id' => $model->wid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sea-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
