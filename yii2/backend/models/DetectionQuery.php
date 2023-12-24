<?php

/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231208
 * 核污染监测数据model-query
 */


namespace app\models;

/**
 * This is the ActiveQuery class for [[Detection]].
 *
 * @see Detection
 */
class DetectionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Detection[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Detection|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
