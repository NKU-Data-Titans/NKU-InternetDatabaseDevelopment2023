<?php


/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231208
 * 核污染监测数据model
 */


namespace app\models;

use Yii;

/**
 * This is the model class for table "detection".
 *
 * @property int $deid
 * @property string|null $deplace
 * @property int|null $dejingwei
 * @property int|null $deaverage
 */
class Detection extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detection';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dejingwei', 'deaverage'], 'string'],
            [['deplace'], 'string', 'max' => 255],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'deid' => 'Deid',
            'deplace' => 'Deplace',
            'dejingwei' => 'Dejingwei',
            'deaverage' => 'Deaverage',
        ];
    }

    /**
     * {@inheritdoc}
     * @return DetectionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DetectionQuery(get_called_class());
    }
}
