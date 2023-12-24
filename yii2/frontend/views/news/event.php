<?php
/**
 * Team: NKU Data Titans
 * Coding by 胡亚飞 2111690
 * 事件详情页
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <h2 data-text="Events" class="event-title">Events</h2>
</div>

<div class="news-content">
    <div class="news-detail-title"><?= Html::encode(" {$events[0]->ename}") ?></div>
    <div class="news-detail-info">
        <span class="news-detail-author"><?= Html::encode(" {$events[0]->eplace}") ?></span>
        <span class="news-detail-date"><?= Html::encode(" {$events[0]->ecount}") ?></span>
    </div>
    <div class="news-detail-video" style="display: flex; justify-content: center;">
        <?php
            if($events[0]->eid == 3){
            echo '<video width="900" height="556" controls style="max-width: 100%;">';
            echo '<source src="../web/images/Video.mp4" type="video/mp4">';
            echo 'Your browser does not support the video tag.';
            echo '</video>';
            }
            ?>
    </div>
    <div class="news-detail-line">正文内容</div>
    <div class="news-detail-content">
        <?php
            $paragraphs = explode("\n", Html::encode(" {$events[0]->econtent}"));
            foreach ($paragraphs as &$paragraph) {
                $paragraph = '<p>' . $paragraph . '</p>';
            }
            echo implode('', $paragraphs);
        ?>
    </div>
    <a href="/yii2/frontend/web/index.php" class="news-retbtn">return home</a>
</div>