<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231208
 * 战损model-form
 */
namespace frontend\models;

use Yii;
use yii\base\Model;

class MeasuresForm extends Model
{
    public $date;
    public $tank;
    public $tankAll;
    public $UAV;
    public $UAVAll;
    public $car;
    public $carAll;
    public function rules()
    {
        return [
            [['date'], 'required'],
        ];
    }
}