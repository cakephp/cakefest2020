<?php
declare(strict_types=1);

namespace App\Model\Behavior;

use Cake\Core\Configure;
use Cake\Datasource\EntityInterface;
use Cake\Event\EventInterface;
use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Cake\Utility\Text;
use Laminas\Diactoros\UploadedFile;

/**
 * Upload behavior
 */
class UploadBehavior extends Behavior
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [
        'uploadPath' => ROOT . '/files/',
    ];

    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setConfig(Configure::read('UploadBehavior'));
    }

    public function beforeMarshal(EventInterface $event, \ArrayObject $data, \ArrayObject $options): void
    {
        /** @var UploadedFile $submittedFile */
        $submittedFile = $data['submittedFile'] ?? null;
        if ($submittedFile) {
            $data['type'] = $submittedFile->getClientMediaType();
            $data['name'] = $submittedFile->getClientFilename();
            $data['metadata'] = \json_encode(['size' => $submittedFile->getSize()]);
            $data['path'] = $this->getConfigOrFail('uploadPath') . Text::uuid();
        }
    }

    public function afterSave(EventInterface $event, EntityInterface $entity, \ArrayObject $options): void
    {
        /** @var UploadedFile $submittedFile */
        $submittedFile = $entity['submittedFile'] ?? null;
        if ($submittedFile) {
            $submittedFile->moveTo($entity['path']);
        }
    }
}
