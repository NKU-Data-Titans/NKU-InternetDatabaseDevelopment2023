<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231210
 * CRUD
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SeaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sea';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sea-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create sea', ['create'], ['class' => 'btn btn-success']) ?>
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
            'wsymbol',
            'wdescription',
            'wimg:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
