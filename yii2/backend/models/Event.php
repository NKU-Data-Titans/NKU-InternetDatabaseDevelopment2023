<?php

/**
 * Coding by 纪潇洋 2110611
 */
namespace app\models;
use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $eid
 * @property string $ename
 * @property string|null $eplace
 * @property string|null $ecount
 * @property string|null $econtent
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ename'], 'required'],
            [['econtent'], 'string'],
            [['ename', 'eplace', 'ecount'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'eid' => 'Eid',
            'ename' => 'Ename',
            'eplace' => 'Eplace',
            'ecount' => 'Ecount',
            'econtent' => 'Econtent',
        ];
    }

    /**
     * {@inheritdoc}
     * @return EventQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventQuery(get_called_class());
    }
}
