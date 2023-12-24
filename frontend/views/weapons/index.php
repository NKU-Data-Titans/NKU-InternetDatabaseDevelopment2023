<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408
 * 武器
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\WeaponsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Weapons';
$this->params['breadcrumbs'][] = $this->title;
?>
<h2 data-text="WEAPONS" class="news-title">WEAPONS</h2>
<div class="weapons-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Weapons', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'wid',
            'wname',
            'wcountry',
            'wdescription',
            'wimg',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
