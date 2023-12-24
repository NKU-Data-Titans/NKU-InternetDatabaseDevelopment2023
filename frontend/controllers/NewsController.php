<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231212
 * 新闻、事件controller
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\News;
use frontend\models\NewsForm;
use frontend\models\Weapons;
use frontend\models\WeaponsForm;
use frontend\models\Event;
use frontend\models\EventForm;

class NewsController extends Controller
{
    public $layout = "main_layout";
    public function actionIndex()
    {
        $model = new NewsForm();
        $qnews = News::find();
        // 按时间倒序，最新的优先
        $news = $qnews->orderBy('ndate DESC')->all();
        $model = new WeaponsForm();
        $qweapons = Weapons::find();
        $data = $qweapons->orderBy('wid')->asArray()->all();
        
        return $this->render('index', ['model' => $model, 'news' => $news, 'data' => $data]);
    }

    public function actionDetail(){
        $title = Yii::$app->request->get('title', '');
        $title = trim($title);
        $model = new NewsForm();
        $news = News::find()->where(['like', 'ntitle', $title])->all();
        return $this->render('detail', ['news' => $news]);
    }

    public function actionEvent(){
        $name = Yii::$app->request->get('name', '');
        $name = trim($name);
        $model = new EventForm();
        $events = Event::find()->where(['like', 'ename', $name])->all();
        return $this->render('event', ['events' => $events]);
    }
}