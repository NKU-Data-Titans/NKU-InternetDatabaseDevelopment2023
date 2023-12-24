<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408
 * 新闻主页
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="js/lunbo.js"></script>
<div>
    <h2 data-text="NEWS" class="news-title">NEWS</h2>
    <?php echo $this->render('lunbo',['data' => $data]);?>

</div>
<div class="news-content">
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/
css/font-awesome.min.css" rel="stylesheet">

    <div class="news-detail-line">新闻模块</div>
    <div class="search-box">
        <input class="search-txt" placeholder="搜索" />
        <a class="search-btn">
            <!--引用的search图标-->
            <i class="fa fa-search" aria-hidden="true" onclick="search()"></i>
        </a>
    </div>
    <div class="news-layout">
        <ul class="news-list">
            <?php foreach ($news as $new): ?>
            <li>
                <a class="news-item-title" data-text=" <?= Html::encode(" {$new->ntitle}") ?>">
                    <?= Html::encode(" {$new->ntitle}") ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        <div class="news-loader">
            <span style="--i:1;" class="loader-span"></span>
            <span style="--i:2;" class="loader-span"></span>
            <span style="--i:3;" class="loader-span"></span>
            <span style="--i:4;" class="loader-span"></span>
            <span style="--i:5;" class="loader-span"></span>
            <span style="--i:6;" class="loader-span"></span>
            <span style="--i:7;" class="loader-span"></span>
            <span style="--i:8;" class="loader-span"></span>
            <span style="--i:9;" class="loader-span"></span>
            <span style="--i:10;" class="loader-span"></span>
            <div class="news-subject">CLICK FOR DETAIL</div>
        </div>
    </div>
    <script>
    $(".news-item-title").click(function() {
        let text = $(this).text();
        window.location.href = "/yii2/frontend/web/index.php?r=news/detail&title=" + text;
    })

    function search() {
        let wd = $(".search-txt").val();
        window.open("https://www.baidu.com/s?wd=" + wd);
    }
    </script>
</div>