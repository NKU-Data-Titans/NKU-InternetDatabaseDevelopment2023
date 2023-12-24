<?php
/**
 * Team: NKU Data Titans
 * Coding by 周钰宸 2111408, 20231208
 * 武器model-query
 */
namespace app\models;

/**
 * This is the ActiveQuery class for [[Weapons]].
 *
 * @see Weapons
 */
class WeaponsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Weapons[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Weapons|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
