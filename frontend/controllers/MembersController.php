<?php
/**
 * Team: NKU Data Titans
 * Coding by 胡亚飞 2111690, 20231212
 * 成员controller
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Members;

class MembersController extends Controller
{
    public $layout = "main_layout";
    public function actionIndex()
    {
        $query = Members::find();
        $members = $query->orderBy('mid')->all();
        return $this->render('index', ['members' => $members]);
    }
}