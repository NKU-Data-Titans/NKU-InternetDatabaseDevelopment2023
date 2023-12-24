<?php

/**
 * Team: NKU Data Titans
 * Coding by 武桐西 2112515, 20231207
 * 评论model
 */



namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $cid
 * @property string|null $cdate
 * @property string|null $ccomment
 * @property string $cuser
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cdate'], 'safe'],
            [['cuser'], 'required'],
            [['ccomment', 'cuser'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cid' => 'Cid',
            'cdate' => 'Cdate',
            'ccomment' => 'Ccomment',
            'cuser' => 'Cuser',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CommentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CommentQuery(get_called_class());
    }
}
