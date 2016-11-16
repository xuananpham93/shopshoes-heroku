<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupportsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupportsTable Test Case
 */
class SupportsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SupportsTable
     */
    public $Supports;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.supports'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Supports') ? [] : ['className' => 'App\Model\Table\SupportsTable'];
        $this->Supports = TableRegistry::get('Supports', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Supports);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
