<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231210
 * CRUD
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Measures */

$this->title = 'Create Measures';
$this->params['breadcrumbs'][] = ['label' => 'Damages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="measures-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
