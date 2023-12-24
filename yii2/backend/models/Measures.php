<?php

/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231208
 */


namespace app\models;

use Yii;

/**
 * This is the model class for table "measures".
 *
 * @property int $mid
 * @property string|null $mname
 * @property int|null $mdescription 单日损失
 */
class Measures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'measures';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mname', 'mdescription'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * {@inheritdoc}
     * @return MeasuresQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MeasuresQuery(get_called_class());
    }
}
