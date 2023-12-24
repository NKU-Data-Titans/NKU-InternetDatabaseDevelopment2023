<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231208
 * 核污染废水元素model-query
 */
namespace frontend\models;

use yii\db\ActiveRecord;

class SeaForm extends ActiveRecord
{
    public $name;
    public $country;
    public $description;
    public $img;

    public function rules()
    {
        return [
            [['name', 'img'], 'required'],
        ];
    }
}