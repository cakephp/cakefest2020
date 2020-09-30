<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GroupsUser Entity
 *
 * @property int $id
 * @property int $group_id
 * @property int $user_id
 * @property string $role
 *
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\User $user
 */
class GroupsUser extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'group_id' => true,
        'user_id' => true,
        'role' => true,
        'group' => true,
        'user' => true,
    ];
}
