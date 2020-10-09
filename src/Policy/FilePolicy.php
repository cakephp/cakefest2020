<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\File;
use App\Model\Entity\FileShareLink;
use Authorization\IdentityInterface;

/**
 * File policy
 */
class FilePolicy
{
    protected function isShareLink(IdentityInterface $identity): bool
    {
        return ($identity->getOriginalData() instanceof FileShareLink);
    }

    protected function inGroup(IdentityInterface $identity, File $file): bool
    {
        $groupIds = array_map(function ($group) {
            return $group->id;
        }, $identity->getOriginalData()->groups);

        return in_array($file->group_id, $groupIds);
    }

    /**
     * Check if $user can create File
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\File $file
     * @return bool
     */
    public function canCreateShareLink(IdentityInterface $user, File $file)
    {
        if ($this->isShareLink($user)) {
            return false;
        }
        return true;
    }

    /**
     * Check if $user can create File
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\File $file
     * @return bool
     */
    public function canAdd(IdentityInterface $user, File $file)
    {
        if ($this->isShareLink($user)) {
            return false;
        }
        return true;
    }

    /**
     * Check if $user can update File
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\File $file
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, File $file)
    {
        if ($this->isShareLink($user)) {
            return false;
        }
        return $this->inGroup($user, $file);
    }

    /**
     * Check if $user can delete File
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\File $file
     * @return bool
     */
    public function canDelete(IdentityInterface $user, File $file)
    {
        if ($this->isShareLink($user)) {
            return false;
        }
        return $this->inGroup($user, $file);
    }

    /**
     * Check if $user can view File
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\File $file
     * @return bool
     */
    public function canView(IdentityInterface $user, File $file)
    {
        return true;
    }
}
