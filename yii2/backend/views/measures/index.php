<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231210
 * CRUD
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\DamageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Measures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="measures-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Measures', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mid',
            'mname',
            'mdescription',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
