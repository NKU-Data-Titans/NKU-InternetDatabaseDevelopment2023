<?php
/**
 * Team: NKU Data Titans
 * Coding by 武桐西 2112515
 * 评论model-form
 */
namespace frontend\models;

use Yii;
use yii\base\Model;

class CommentForm extends Model
{
    public $user;
    public $comment;

    public function rules()
    {
        return [
            [['user', 'comment'], 'required'],
        ];
    }
}