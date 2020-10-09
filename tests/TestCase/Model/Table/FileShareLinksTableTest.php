<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FileShareLinksTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FileShareLinksTable Test Case
 */
class FileShareLinksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FileShareLinksTable
     */
    protected $FileShareLinks;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.FileShareLinks',
        'app.Files',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('FileShareLinks') ? [] : ['className' => FileShareLinksTable::class];
        $this->FileShareLinks = $this->getTableLocator()->get('FileShareLinks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->FileShareLinks);

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
