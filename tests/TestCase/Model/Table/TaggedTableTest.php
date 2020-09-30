<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TaggedTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TaggedTable Test Case
 */
class TaggedTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TaggedTable
     */
    protected $Tagged;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Tagged',
        'app.Tags',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tagged') ? [] : ['className' => TaggedTable::class];
        $this->Tagged = $this->getTableLocator()->get('Tagged', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Tagged);

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
