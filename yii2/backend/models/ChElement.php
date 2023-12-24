<?php

/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231208
 */


namespace app\models;

use Yii;

/**
 * This is the model class for table "ChElement".
 *
 * @property int $ceid
 * @property string $cename
 * @property string|null $cesymbol
 * @property string|null $cedescription
 */
class ChElement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ch_element';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ceid', 'cename'], 'required'],
            [['ceid'], 'integer'],
            [['cedescription'], 'string'],
            [['cename', 'cesymbol'], 'string', 'max' => 255],
            [['ceid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ceid' => 'CEid',
            'cename' => 'CEname',
            'cesymbol' => 'CEsymbol',
            'cedescription' => 'CEdescription',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ChElementQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ChElementQuery(get_called_class());
    }
}
