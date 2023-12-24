<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408
 * 个人作业——成员2
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '个人作业2-武桐西';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="personal-section">
        <div class="personal-box-item">
            <h3>武桐西</h3>
            <div class="personal-box-list" value="4">
                <div class="personal-img-box">
                    <img src="../web/img/hw.png">
                </div>
                <div class="personal-box-content">
                    <h2 class="personal-rank">
                        <small>#</small>1
                    </h2>
                    <h4>作业1</h4>
                    <p>前端初探</p>
                </div>
            </div>
            <div class="personal-box-list" value="5">
                <div class="personal-img-box">
                    <img src="../web/img/hw.png">
                </div>
                <div class="personal-box-content">
                <h2 class="personal-rank">
                        <small>#</small>2
                    </h2>
                    <h4>作业2</h4>
                    <p>页面设计</p>
                </div>
            </div>
            <div class="personal-box-list" value="6">
                <div class="personal-img-box">
                    <img src="../web/img/hw.png">
                </div>
                <div class="personal-box-content">
                <h2 class="personal-rank">
                        <small>#</small>3
                    </h2>
                    <h4>作业3</h4>
                    <p>框架建站</p>
                </div>
            </div>
        </div>
</div>



<script>
    $(".personal-box-list").click(function(){
        var value=$(this).attr('value');
        switch(value){
            case '1': $(location).attr('href', '../../data/personal/作业1(2111408_周钰宸).zip');break;
            case '2': $(location).attr('href', '../../data/personal/作业2(2111408_周钰宸).zip');break;
            case '3': $(location).attr('href', '../../data/personal/作业3(2111408_周钰宸).zip');break;
            case '4': $(location).attr('href', '../../data/personal/作业1(2112515_武桐西).zip');break;
            case '5': $(location).attr('href', '../../data/personal/作业2(2112515_武桐西).zip');break;
            case '6': $(location).attr('href', '../../data/personal/作业3(2112515_武桐西).zip');break;
            case '7': $(location).attr('href', '../../data/personal/作业1(2111690_胡亚飞).zip');break;
            case '8': $(location).attr('href', '../../data/personal/作业2(2111690_胡亚飞).zip');break;
            case '9': $(location).attr('href', '../../data/personal/作业3(2111690_胡亚飞).zip');break;
            case '10': $(location).attr('href', '../../data/personal/作业1(2110611_纪潇洋).zip');break;
            case '11': $(location).attr('href', '../../data/personal/作业2(2110611_纪潇洋).zip');break;
            case '12': $(location).attr('href', '../../data/personal/作业3(2110611_纪潇洋).zip');break;
            default:break;
        }
    });
</script>