<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231211
 * 官员controller
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\ChElement;
use frontend\models\ChElementForm;

class ChElementController extends Controller
{
    public $layout = "main_layout";
    public function actionIndex()
    {
        $model = new ChElementForm();
        $query = ChElement::find();
        //按数据库中数据oid从前往后排序
        $chelement = $query->orderBy('ceid ASC')->all();
        return $this->render('index', ['model' => $model, 'chelements' => $chelement]);
    }
}