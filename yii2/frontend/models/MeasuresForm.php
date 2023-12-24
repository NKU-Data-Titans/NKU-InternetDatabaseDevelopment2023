<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231208
 * 措施model-form
 */
namespace frontend\models;

use Yii;
use yii\base\Model;

class MeasuresForm extends Model
{
    // public $date;
    // public $tank;
    public $names;
    public $description;
    public function rules()
    {
        return [
            [['name'], 'required'],
        ];
    }
}