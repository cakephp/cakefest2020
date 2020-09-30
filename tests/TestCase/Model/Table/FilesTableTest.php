<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilesTable Test Case
 */
class FilesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FilesTable
     */
    protected $Files;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Files',
        'app.Groups',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Files') ? [] : ['className' => FilesTable::class];
        $this->Files = $this->getTableLocator()->get('Files', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Files);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
