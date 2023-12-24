<?php
/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231208
 * 官员model-form
 */
namespace frontend\models;

use Yii;
use yii\base\Model;

class ChElementForm extends Model
{
    public $name;
    public $country;
    public $description;

    public function rules()
    {
        return [
            [['name', 'country'], 'required'],
        ];
    }
}