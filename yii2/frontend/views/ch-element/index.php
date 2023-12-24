<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231212
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '核污染主要化学元素简介';
$this->params['breadcrumbs'][] = $this->title;
$chElementNum=1;
?>
<div>
<h2 data-text="CHELEMENT" class="chelement-title">CHELEMENT</h2>
</div>

<style>
    .container {
        width: 80%;
        margin: auto;
        overflow: hidden; /* 清除浮动 */
        font-family: 'KaiTi', '楷体', serif; /* 设置字体为楷书 */
        color: white; /* 文字颜色设置为白色 */
    }

    .left-section, .right-section {
        float: left;
        width: 50%; /* 左侧和右侧区域各占一半宽度 */
    }

    .section-title {
        font-size: 28px; /* 标题字体大小 */
        margin-bottom: 10px; /* 标题的底部边距 */
        color: red; 
    }

    .section-content {
        font-size: 22px; /* 内容字体大小 */
        margin-bottom: 15px; /* 内容的底部边距 */
        text-indent: 2em; /* 首行缩进 */
    }

    .chelement-img-div {
        text-align: center; /* 图片居中 */
        margin-bottom: 20px;
    }
    .chelement-header {
        font-size: 18px; /* 适当增大字体大小 */
        margin-top: 20px;
    }
    .chelement-img {
        width: 100%; /* 图片宽度调整为占满容器 */
        height: auto; /* 保持图片的纵横比 */
        border: 3px solid #ccc; /* 给图片添加边框 */
    }
</style>

<div class="container">
    <div class="left-section">
        <div class="section">
            <div class="section-title">核污染的元素简介</div>
            <div class="section-content">
            &nbsp;&nbsp;核污染中的化学元素对人体的影响通常与它们的放射性特性有关。这些放射性元素，如铀、钚、铯等，
    在核设施事故、核核污染废水元素测试或不当处理核废料的情况下释放到环境中，可能对人类健康构成严重威胁。
    暴露于高水平的放射性物质可以导致急性辐射症状，如恶心、呕吐、脱发和出血，这些症状通常与剂量有关。
    长期暴露可能导致更严重的健康问题，包括癌症、心血管疾病、遗传变异、生殖问题和免疫系统损害。
    除了直接影响，放射性元素还可以通过污染空气、水和土壤，进入食物链，间接影响人类健康。
    尤其是孕妇和儿童对放射性物质更为敏感，因此风险更高。
            </div>
        </div>


        <div class="section">
            <div class="section-title">应对措施</div>
            <div class="section-content">
            &nbsp;&nbsp;为了处理核污染中的放射性元素，需要采取多种措施。
        首先，重要的是要进行及时的污染监测和风险评估，以确保迅速采取应对措施。在污染场地，应采取隔离和封存措施，
        以防止进一步的环境扩散。在污染水体或土壤的情况下，可能需要采用化学或物理方法进行净化和去污。此外，公共健康措施，
        如提供干净的饮用水和食物，为受影响人群提供医疗照顾，以及开展健康教育活动，对减少放射性污染的健康影响至关重要。
        政府和相关机构还需制定长期的监控计划，跟踪放射性物质的扩散， 并实施有效的危机管理策略，以保护公共健康和安全。
            </div>
        </div>
    </div>

    <div class="right-section">
        <div class="news-detail-line">下面是核污染涉及到的主要化学元素简介</div>
        <div class="chelement-shell">
        <?php 
        $chElementNum = 1;
        foreach ($chElements as $chElement): 
            if ($chElementNum > 8) {
                break;
            }
        ?>
         <div class="chelement-header">第<?= $chElementNum ?>个元素: <?= Html::encode("{$chElement->cename}, {$chElement->cesymbol}, {$chElement->cedescription}") ?></div>
            <div class="chelement-img-div"><img class="chelement-img" src="../web/images/<?= $chElementNum ?>.png"></div>
            <?php $chElementNum++; ?>
        <?php endforeach; ?>
        </div>
    </div>
</div>



