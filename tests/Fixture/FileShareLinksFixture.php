<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FileShareLinksFixture
 */
class FileShareLinksFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'file_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'token' => ['type' => 'string', 'length' => 64, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'expires_at' => ['type' => 'timestampfractional', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 6],
        'created' => ['type' => 'timestampfractional', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 6],
        'modified' => ['type' => 'timestampfractional', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 6],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'file_share_file_idx' => ['type' => 'foreign', 'columns' => ['file_id'], 'references' => ['files', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'file_id' => 1,
                'token' => 'Lorem ipsum dolor sit amet',
                'expires_at' => 1602174640,
                'created' => 1602174640,
                'modified' => 1602174640,
            ],
        ];
        parent::init();
    }
}
