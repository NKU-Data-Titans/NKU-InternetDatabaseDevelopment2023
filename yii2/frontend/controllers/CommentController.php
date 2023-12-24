<?php
/**
 * Team: NKU Data Titans
 * Coding by 武桐西 2112515, 20231211
 * 评论controller
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Comment;
use frontend\models\CommentForm;

class CommentController extends Controller
{
    public $layout = "main_layout";
    public function actionIndex()
    {
        $model = new CommentForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Comment::add($model->user, $model->comment);
            $model->comment = "";
        }
        $query = Comment::find();
        $comments = $query->orderBy('cdate')->all();
        return $this->render('index', ['model' => $model, 'comments' => $comments]);
    }
}