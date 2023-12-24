<?php

/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231209
 * 新闻model
 */

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $nid
 * @property string|null $ntitle
 * @property string|null $nauthor
 * @property string|null $ndate
 * @property string|null $ncontent
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ndate'], 'safe'],
            [['ncontent'], 'string'],
            [['ntitle', 'nauthor'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nid' => 'Nid',
            'ntitle' => 'Ntitle',
            'nauthor' => 'Nauthor',
            'ndate' => 'Ndate',
            'ncontent' => 'Ncontent',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NewsQuery(get_called_class());
    }
}
