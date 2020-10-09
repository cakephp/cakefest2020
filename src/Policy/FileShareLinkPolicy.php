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
    protected function isShareLink(IdentityInterface $identity): bool
    {
        return ($identity->getOriginalData() instanceof FileShareLink);
    }

    /**
     * Check if $user can create FileShareLink
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\FileShareLink $fileShareLink
     * @return bool
     */
    public function canCreate(IdentityInterface $user, FileShareLink $fileShareLink)
    {
    }

    /**
     * Check if $user can update FileShareLink
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\FileShareLink $fileShareLink
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, FileShareLink $fileShareLink)
    {
        if ($this->isShareLink($user)) {
            return false;
        }
        // for now.
        return true;
    }

    /**
     * Check if $user can delete FileShareLink
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\FileShareLink $fileShareLink
     * @return bool
     */
    public function canDelete(IdentityInterface $user, FileShareLink $fileShareLink)
    {
    }

    /**
     * Check if $user can view FileShareLink
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\FileShareLink $fileShareLink
     * @return bool
     */
    public function canView(IdentityInterface $user, FileShareLink $fileShareLink)
    {
        return true;
    }
}
