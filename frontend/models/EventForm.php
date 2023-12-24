<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231209
 * 事件model-form
 */
namespace frontend\models;

use Yii;
use yii\base\Model;

class EventForm extends Model
{
    public $name;
    public $location;
    public $winner;
    public $description;
    public function rules()
    {
        return [
            [['name'], 'required'],
        ];
    }
}