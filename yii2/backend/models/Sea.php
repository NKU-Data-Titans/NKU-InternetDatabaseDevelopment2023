<?php


/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231208
 */


namespace app\models;

use Yii;

/**
 * This is the model class for table "sea".
 *
 * @property int $wid
 * @property string|null $wname
 * @property string|null $wsymbol
 * @property string|null $wdescription
 * @property string|null $wimg
 */
class Sea extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sea';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wimg'], 'string'],
            [['wname', 'wsymbol', 'wdescription'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'wid' => 'Wid',
            'wname' => 'Wname',
            'wsymbol' => 'Wsymbol',
            'wdescription' => 'Wdescription',
            'wimg' => 'Wimg',
        ];
    }

    /**
     * {@inheritdoc}
     * @return SeaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SeaQuery(get_called_class());
    }
}
