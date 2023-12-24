<?php


/**
 * Team: NKU Data Titans
 * Coding by 武桐西 2112515, 20231207
 * 用户model-query
 */


namespace app\models;

/**
 * This is the ActiveQuery class for [[User]].
 *
 * @see User
 */
class UserQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return User[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return User|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
