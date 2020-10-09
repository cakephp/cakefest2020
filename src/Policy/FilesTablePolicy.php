<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Table\FilesTable;
use Authorization\IdentityInterface;
use Cake\ORM\Query;

/**
 * Files policy
 */
class FilesTablePolicy
{
    public function scopeIndex(IdentityInterface $user, Query $query): Query
    {
        $query->find('forGroups', ['groups' => $user->groups]);

        return $query;
    }
}
