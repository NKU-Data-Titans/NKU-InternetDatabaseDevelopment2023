<?php
/**
 * Team: NKU Data Titans
 * Coding by 胡亚飞 2111690, 20231211
 * 成员页
 */
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'TeamMem';
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="css/animate.css" rel="stylesheet">
<link href="css/members.css" rel="stylesheet">
<script src="js-new/jquery.appear.js"></script>
<script src="js-new/bootstrap.js"></script>
<script src="js-new/jquery.sidr.min.js"></script>
<script src="js-new/script.js"></script>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="blog-single-box clearfix animated out" data-delay="0" data-animation="fadeInUp">
                    <h2><?= Html::encode("{$members[0]->mname}")?></h2>
                    <figure>
                        <img class="img-responsive" src="images/logos/ErwinZhou.jpg" alt="">
                    </figure>
                    <div class="text-center">
                        <blockquote>
                            <p><?= Html::encode("{$members[0]->mdescription}")?></p>
                        </blockquote>
                    </div>
                    <a href="http://localhost/yii2/backend/web/index.php?r=assignment%2Fpersonal&id=1" class="btn">MY
                        WORK<i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="blog-single-box clearfix animated out" data-delay="0" data-animation="fadeInUp">
                    <h2><?= Html::encode("{$members[1]->mname}")?></h2>
                    <figure>
                        <img class="img-responsive" src="images/logos/HaibaraAi.jpg" alt="">
                    </figure>
                    <div class="text-center">
                        <blockquote>
                            <p><?= Html::encode("{$members[1]->mdescription}")?></p>
                        </blockquote>
                    </div>
                    <a href="http://localhost/yii2/backend/web/index.php?r=assignment%2Fpersonal&id=2" class="btn">MY
                        WORK<i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="blog-single-box clearfix animated out" data-delay="0" data-animation="fadeInUp">
                    <h2><?= Html::encode("{$members[2]->mname}")?></h2>
                    <figure>
                        <img class="img-responsive" src="images/logos/Nonsense.jpg" alt="">
                    </figure>
                    <div class="text-center">
                        <blockquote>
                            <p><?= Html::encode("{$members[2]->mdescription}")?></p>
                        </blockquote>
                    </div>
                    <a href="http://localhost/yii2/backend/web/index.php?r=assignment%2Fpersonal&id=3" class="btn">MY
                        WORK<i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="blog-single-box clearfix animated out" data-delay="0" data-animation="fadeInUp">
                    <h2><?= Html::encode("{$members[3]->mname}")?></h2>
                    <figure>
                        <img class="img-responsive" src="images/logos/Stephenbiu.jpg" alt="">
                    </figure>
                    <div class="text-center">
                        <blockquote>
                            <p><?= Html::encode("{$members[3]->mdescription}")?></p>
                        </blockquote>
                    </div>
                    <a href="http://localhost/yii2/backend/web/index.php?r=assignment%2Fpersonal&id=4" class="btn">MY
                        WORK<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>