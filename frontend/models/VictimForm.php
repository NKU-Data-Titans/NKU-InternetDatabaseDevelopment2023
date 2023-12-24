<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231208
 * 伤亡model
 */
namespace frontend\models;

use Yii;
use yii\base\Model;

class VictimForm extends Model
{
    public $title;
    public $author;
    public $date;
    public $content;

    public function rules()
    {
        return [
            [['title', 'author'], 'required'],
        ];
    }
}