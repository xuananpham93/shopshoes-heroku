<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatproductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatproductsTable Test Case
 */
class CatproductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CatproductsTable
     */
    public $Catproducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.catproducts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Catproducts') ? [] : ['className' => 'App\Model\Table\CatproductsTable'];
        $this->Catproducts = TableRegistry::get('Catproducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Catproducts);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
