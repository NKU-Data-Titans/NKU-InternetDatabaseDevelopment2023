<?php

/**
 * Team: NKU Data Titans
 * Coding by 胡亚飞 2111690, 20231210
 * 成员model
 */

namespace app\models;

use Yii;

/**
 * This is the model class for table "members".
 *
 * @property int $mid
 * @property string|null $mname
 * @property string|null $mdescription
 * @property string|null $mgroup
 */
class Members extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'members';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mname', 'mdescription', 'mgroup'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mid' => 'Mid',
            'mname' => 'Mname',
            'mdescription' => 'Mdescription',
            'mgroup' => 'Mgroup',
        ];
    }

    /**
     * {@inheritdoc}
     * @return MembersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MembersQuery(get_called_class());
    }
}
