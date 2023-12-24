<?php 
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231212
 * 措施页
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '核废水的应对措施';
$this->params['breadcrumbs'][] = $this->title;
$measuresNum=1;
?>
<div>
    <h2 data-text="MEASURES" class="measures-title">MEASURES</h2>
</div>
<div>
    <div class="news-detail-line">下面是俄乌战争中采取的部分措施</div>
    <ul>
        <?php foreach ($measures as $measure): ?>
        <div class="measure-block">
            <h3><?= Html::encode($measure->mname) ?></h3>
            <p><?= Html::encode($measure->mdescription) ?></p>
            <?php
                $imagePath = "../web/images/Measures/{$measure->mid}.png";
                echo '<img src="' . $imagePath . '" style="width: 600px; height: 450px; display: block; margin: 0 auto;">';
            ?>
        </div>
        <?php endforeach; ?>
    </ul>
</div>