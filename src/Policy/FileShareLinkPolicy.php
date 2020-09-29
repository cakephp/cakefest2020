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
    protected function isShareLink(IdentityInterface $user): bool
    {
        return ($user->getOriginalData() instanceof FileShareLink);
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
        if ($this->isShareLink($user)) {
            return false;
        }
        return true;
    }
}
