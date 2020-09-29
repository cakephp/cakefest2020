<?php
declare(strict_types=1);

namespace App\Authenticator;

use Authentication\Authenticator\AbstractAuthenticator;
use Authentication\Authenticator\Result;
use Authentication\Authenticator\ResultInterface;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\ORM\Locator\LocatorAwareTrait;
use Psr\Http\Message\ServerRequestInterface;

class FileShareLinkAuthenticator extends AbstractAuthenticator
{
    use LocatorAwareTrait;

    protected $_defaultConfig = [
        'tokenParam' => 'token',
    ];

    public function authenticate(ServerRequestInterface $request): ResultInterface
    {
        $field = $this->getConfig('tokenParam');
        $params = $request->getAttribute('params');
        if (!$params || !isset($params[$field])) {
            return new Result(null, ResultInterface::FAILURE_CREDENTIALS_MISSING, ['Missing token']);
        }
        $token = $params[$field];
        $shareLinks = $this->getTableLocator()->get('FileShareLinks');

        try {
            $shareLink = $shareLinks->find('liveToken', ['token' => $token])->firstOrFail();
            return new Result($shareLink, ResultInterface::SUCCESS);
        } catch (RecordNotFoundException $e) {
            return new Result(null, ResultInterface::FAILURE_IDENTITY_NOT_FOUND, ['Invalid or missing token.']);
        }

        return new Result(null, ResultInterface::FAILURE_OTHER, ['Unknown error']);
    }
}
