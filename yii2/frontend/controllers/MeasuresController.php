<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231212
 * 措施controller
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Measures;
use frontend\models\MeasuresForm;

class MeasuresController extends Controller
{
    public $layout = "main_layout";
    public function actionIndex()
    {
        $model = new MeasuresForm();
        $query = Measures::find();
        //按数据库中数据id从前往后排序
        $measures = $query->orderBy('mid ASC')->all();
        return $this->render('index', ['model' => $model, 'measures' => $measures]);
    }
    public function actionEchart()
    {
        return $this->render('echart');
    }
}