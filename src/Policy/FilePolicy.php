<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\File;
use App\Model\Entity\FileShareLink;
use App\Model\Entity\User;
use Authorization\IdentityInterface;

/**
 * File policy
 */
class FilePolicy
{
    protected function isShareLink(IdentityInterface $user): bool
    {
        return ($user->getOriginalData() instanceof FileShareLink);
    }

    /**
     * Check if $user can create File
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\File $file
     * @return bool
     */
    public function canCreate(IdentityInterface $user, File $file)
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
    public function canEdit(IdentityInterface $user, File $file)
    {
        if ($this->isShareLink($user)) {
            return false;
        }
        // TODO check the user's group/ownership.
        return true;
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
        // TODO check the user's group/ownership.
        return true;
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
        if ($this->isShareLink($user)) {
            return true;
        }
        // TODO check the user's group/ownership.
        return true;
    }
}
