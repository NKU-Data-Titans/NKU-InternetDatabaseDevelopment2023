<?php

/**
 * Team: NKU Data Titans
 * Coding by 纪潇洋 2110611, 20231208
 */


namespace app\models;

/**
 * This is the ActiveQuery class for [[Measures]].
 *
 * @see Measures
 */
class MeasuresQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Measures[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Measures|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
