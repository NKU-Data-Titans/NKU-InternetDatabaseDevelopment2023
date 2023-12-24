<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408
 * 新闻详情页
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <h2 data-text="NEWS" class="news-title">NEWS</h2>
</div>

<div class="news-content">
    <div class="news-detail-title"><?= Html::encode(" {$news[0]->ntitle}") ?></div>
    <div class="news-detail-info">
        <span class="news-detail-author"><?= Html::encode(" {$news[0]->nauthor}") ?></span>
        <span class="news-detail-date"><?= Html::encode(" {$news[0]->ndate}") ?></span>
    </div>
    <div class="news-detail-line">正文内容</div>
    <div class="news-detail-content">
        <?php
        switch ($news[0]->nid) {
            case 7:
                echo '<img src="../web/images/News/BBC2.jpg" style="width: 600px; height: 400px; display: block; margin: 0 auto;">';
                break;
            case 6:
                echo '<img src="../web/images/News/USNews1.jpg" style="width: 600px; height: 400px; display: block; margin: 0 auto;">';
                break;
            case 5: 
                echo '<img src="../web/images/News/JapanTimes.jpg" style="width: 600px; height: 400px; display: block; margin: 0 auto;">';
                break;
            case 4:
                echo '<img src="../web/images/News/YangGuang.jpg" style="width: 600px; height: 400px; display: block; margin: 0 auto;">';
                break;
            case 3:
                echo '<img src="../web/images/News/Deadfish.jpg" style="width: 600px; height: 400px; display: block; margin: 0 auto;">';
                break;
            case 2:
                echo '<img src="../web/images/News/Sohu.jpg" style="width: 600px; height: 400px; display: block; margin: 0 auto;">';
                break;
            case 1:
                echo '<img src="../web/images/News/Light1.jpg" style="width: 600px; height: 400px; display: block; margin: 0 auto;">';
                break;
        }
        $paragraphs = explode("\n", Html::encode(" {$news[0]->ncontent}"));
        foreach ($paragraphs as &$paragraph) {
            $paragraph = '<p>' . $paragraph . '</p>';
        }
        echo implode('', $paragraphs);
        ?>
        
    </div>

    <a href=" ?r=news" class="news-retbtn">return news</a>
</div>