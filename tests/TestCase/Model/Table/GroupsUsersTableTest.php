<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GroupsUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GroupsUsersTable Test Case
 */
class GroupsUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GroupsUsersTable
     */
    protected $GroupsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.GroupsUsers',
        'app.Groups',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('GroupsUsers') ? [] : ['className' => GroupsUsersTable::class];
        $this->GroupsUsers = $this->getTableLocator()->get('GroupsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->GroupsUsers);

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
