<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'TeamMem';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .photo{
    float:left;
    width:20%
    }
    .intro{
        float:right;
        width:80%
    }
    .textsolid{
        height: 190px;
        border: 1px solid red;
        margin: auto;
        background-color: white;
    }
</style>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="photo"><div class="textsolid"><img src="images/page1_img1.jpg"></div></div>
    <div class="intro">
    <div class="textsolid">
	    <p>姓名：胡亚飞<emsp> </emsp>学号：</p>
        <p>简介：</p>
        <p>作业链接：<a href="/internet-database-development/yii2/frontend/web/index.php?r=site/contact">链接</a></p>
    </div>
    </div>
    <br>
    <br>
    <br>
    <div class="photo"><div class="textsolid"><img src="images/page1_img1.jpg"></div></div>
    <div class="intro">
    <div class="textsolid">
	    <p>姓名：胡亚飞<emsp> </emsp>学号：</p>
        <p>简介：</p>
        <p>作业链接：<a href="/internet-database-development/yii2/frontend/web/index.php?r=site/contact">链接</a></p>
    </div>
    </div>
    <br>
    <br>
    <br>
    <div class="photo"><div class="textsolid"><img src="images/page1_img1.jpg"></div></div>
    <div class="intro">
    <div class="textsolid">
	    <p>姓名：胡亚飞<emsp> </emsp>学号：</p>
        <p>简介：</p>
        <p>作业链接：<a href="/internet-database-development/yii2/frontend/web/index.php?r=site/contact">链接</a></p>
    </div>
    </div>
    <br>
    <br>
    <br>
    <div class="photo"><div class="textsolid"><img src="images/page1_img1.jpg"></div></div>
    <div class="intro">
    <div class="textsolid">
	    <p>姓名：胡亚飞<emsp> </emsp>学号：</p>
        <p>简介：</p>
        <p>作业链接：<a href="/internet-database-development/yii2/frontend/web/index.php?r=site/contact">链接</a></p>
    </div>
    </div>
    </br>
</div>
