<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231212
 * 官员页
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '俄乌战争中伤亡军官介绍';
$this->params['breadcrumbs'][] = $this->title;
$chelementNum=1;
?>
<div>
    <h2 data-text="CHELEMENT" class="chelement-title">CHELEMENT</h2>
</div>
<div>
    <div class="chelement-intro">自2月24日俄发动特别军事行动以来,以造成双方大量将士阵亡。
        战争相当残酷，超出了很多人的想象。
        尽管现代战争不再过分强调“以量取胜”，而是依靠先进武器和信息技术的支持。
        但在真实的战场上，战争烈度和残酷性依旧高得惊人。
        即便是中高级将领，依旧随时可能在战场上面临阵亡的风险。
    </div>
    <div class="news-detail-line">下面是俄乌战争中阵亡的部分军官信息</div>
    <ul>
        <div class="chelement-shell">
            <?php foreach ($chelements as $chelement): ?>
            <div class="chelement-header">
                <?= Html::encode("第".$chelementNum."位:{$chelement->cename},{$chelement->cesymbol},{$chelement->cedescription}") ?>
            </div>
            <?php
        $chelementjpg="../web/images/".$chelementNum.".jpg";
        $html="<div class='chelement-img-div'><img class='chelement-img' src=".$chelementjpg."></div>";
        echo $html;
        $chelementNum++;
        ?>
            <?php endforeach; ?>
        </div>
        <div class="chelement-intro">我们常把俄罗斯称为“战斗民族”，中高级指挥员的阵亡不至于对俄军的士气构成太大的打击，甚至反而会激励更多官兵英勇奋战。
            相信为了尽可能地减少人员伤亡，俄军会在乌克兰战场上投入越来越多的远程火力，如炮击、空袭和导弹打击，以“非接触作战”的方式，提升战斗效能并避免损失。
            然而世间上战争是最可怕的，战争不但毁掉很多家庭，也让人民无家可归。
            要珍惜和平，希望世界再无战争。
        </div>
    </ul>
    <div>
    </div>