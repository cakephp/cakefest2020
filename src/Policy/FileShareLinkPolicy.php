<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\FileShareLink;
use Authorization\IdentityInterface;

/**
 * FileShareLink policy
 */
class FileShareLinkPolicy
{
    protected function inGroup(File $file, IdentityInterface $user): bool
    {
        $groupIds = array_map(function ($group) {
            return $group->id;
        }, $user->getOriginalData()->groups);

        return in_array($file->group_id, $groupIds);
    }

    protected function isShareLink(IdentityInterface $user): bool
    {
        return ($user->getOriginalData() instanceof FileShareLink);
    }

    /**
     * Check if $user can create
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\FileShareLink $fileShareLink
     * @return bool
     */
    public function canAdd(IdentityInterface $user, FileShareLink $fileShareLink)
    {
        if ($this->isShareLink($user)) {
            return false;
        }
        return true;
    }

    /**
     * Check if $user can delete
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\FileShareLink $fileShareLink
     * @return bool
     */
    public function canDelete(IdentityInterface $user, FileShareLink $fileShareLink)
    {
        if ($this->isShareLink($user)) {
            return false;
        }
        return true;
    }
}
