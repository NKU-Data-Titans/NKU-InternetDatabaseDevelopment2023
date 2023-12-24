<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231212
 * DetectionController
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;

class DetectionController extends Controller
{
    public $layout = "main_layout";
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionEchart()
    {
        return $this->render('echart');
    }
}