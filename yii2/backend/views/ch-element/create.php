<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231209
 * CRUD
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ChElement */

$this->title = 'Create ChElement';
$this->params['breadcrumbs'][] = ['label' => 'ChElements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="che-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
