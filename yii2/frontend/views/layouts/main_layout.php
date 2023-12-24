<!DOCTYPE html>
<html lang="en">

<head>
    <title>NKU Data Titans</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/Carousel.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/comment.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/detection.css">
    <link rel="stylesheet" href="css/chelement.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/measures.css">
    <link rel="stylesheet" href="css/signup_login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lobster&display=swap">

    <script src="js/jquery.js"></script>

    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script>
    $(window).load(function() {
        $('.slider')._TMS({
            show: 0,
            pauseOnHover: false,
            prevBu: '.prev',
            nextBu: '.next',
            playBu: false,
            duration: 800,
            preset: 'fade',
            pagination: true, //'.pagination',true,'<ul></ul>'
            pagNums: false,
            slideshow: 8000,
            numStatus: false,
            banners: true,
            waitBannerAnimation: false,
            progressBar: false
        })
    });
    </script>
    <!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <link rel="stylesheet" media="screen" href="css/ie.css">

	<![endif]-->
</head>

<body>
    <!--==============================header=================================-->
    <header>
        <div class="container_12">
            <div class="grid_12">
                
                <div class="clear"></div>

                <div class="menu_block">
                    <nav class="">
                        <ul class="sf-menu">
                            <li class="logo">
                                <a href="index.php">
                                <img class="logo-image" src="images/logos/NKU-Data-Titans.png" style="width: 50px; height: auto;" alt="核污染  made by NKU-Data-Titans">NKU-Data-Titans
                                </a>
                            </li>

                            <li class=""><a href="/yii2/frontend/web/">HOME</a></li>
                            <li class="with_ul"><a href="/yii2/frontend/web/index.php?r=site/about">OVERVIEW</a>
                                <ul>
                                    <li><a href="/yii2/frontend/web/index.php?r=news/index">NEWS</a></li>
                                    <li><a href="/yii2/frontend/web/index.php?r=ch-element/index">CHELEMENT</a></li>
                                    <li><a href="/yii2/frontend/web/index.php?r=detection/index">DETECTION</a></li>
                                    <li><a href="/yii2/frontend/web/index.php?r=measures/index">MEASURES</a></li>
                                    <li><a href="/yii2/frontend/web/index.php?r=comment/index">COMMENT</a></li>
                                    <li><a href="/yii2/frontend/web/index.php?r=members/index">TEAM</a></li>
                                </ul>
                            </li>

                            <li><a href="/yii2/backend/web/">BACKEND</a></li>
                            <?php if(Yii::$app->user->isGuest){ ?>
                            <li><a href="/yii2/frontend/web/index.php?r=site/signup">SIGNUP</a></li>
                            <?php } ?>
                            <?php if(Yii::$app->user->isGuest){ ?>
                            <li><a href="/yii2/frontend/web/index.php?r=site/login">LOGIN</a></li>
                            <?php } ?>
                            <?php if(!Yii::$app->user->isGuest){ ?>
                            <li><a href="/yii2/frontend/web/index.php?r=site/logout" data-method="post">LOGOUT</a></li>
                            <?php } ?>
                            </li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </header>
    <?= $content ?>

    <div class="bottom_block">
        <div class="container_12">
            <div class="grid_6">
                <h5>Events</h5>
                <ul>
                    <?php
				// 获取EVENTS并渲染
				use frontend\models\Event;
				use frontend\models\EventForm;
				$model = new EventForm();
				$events = Event::find()->orderBy('eid DESC')->asArray()->all();
				$i = 0;
				foreach ($events as $event){
					$i+=1;
					if($i>5)break;
					// 切片用单引号
					$url = "/yii2/frontend/web/index.php?r=news/event&name=".$event['ename'];
					echo '<li><a href="'.$url.'">'.$event['ename'].'</a></li>';
				}
			?>
                </ul>
            </div>
            <div class="grid_5">
                <h4>contact Us</h4>
                <p>We are NKU Data Titans, we build impossible out of nothing.
                    <span>ErwinZhou@outlook.com</span>
            </div>
        </div>
    </div>
    <!--==============================footer=================================-->

    <footer>
        <div class="container_12">
            <div class="grid_12">

                <p>&copy; Copyright &copy; 2013.Company name All rights reserved.<a target="_blank"
                        href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                <address>
                    9870 ST VINCENT PLACE, GLASGOW, DC 45 FR 45.<br>
                    TELEPHONE: +1 800 603 6035</address>

            </div>
            <div class="clear"></div>
        </div>
    </footer>
    <div style="display:none">
        <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'>
        </script>
    </div>
</body>

</html>