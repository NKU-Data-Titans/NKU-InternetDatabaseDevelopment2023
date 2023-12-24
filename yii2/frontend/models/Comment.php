<?php
/**
 * Team: NKU Data Titans
 * Coding by 武桐西 2112515
 * 评论model
 */
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class Comment extends ActiveRecord
{
    static public function add($name, $comment){
        Yii::$app->db->createCommand()->insert('comment', [
                'cuser' => $name,
                'ccomment' => $comment,
                'cdate' => date('Y-m-d H-i-s', time())
            ])->execute();
    }
}