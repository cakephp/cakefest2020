<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tagged Entity
 *
 * @property int $id
 * @property string $table_alias
 * @property int $foreign_key
 * @property int $tag_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Tag $tag
 */
class Tagged extends Entity
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
        'table_alias' => true,
        'foreign_key' => true,
        'tag_id' => true,
        'created' => true,
        'modified' => true,
        'tag' => true,
    ];
}
