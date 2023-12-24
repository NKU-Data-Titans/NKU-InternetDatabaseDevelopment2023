<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231208
 * 核污染废水元素model-query
 */
namespace app\models;

/**
 * This is the ActiveQuery class for [[Sea]].
 *
 * @see Sea
 */
class SeaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Sea[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Sea|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
