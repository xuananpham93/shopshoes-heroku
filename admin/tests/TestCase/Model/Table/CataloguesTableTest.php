<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CataloguesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CataloguesTable Test Case
 */
class CataloguesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CataloguesTable
     */
    public $Catalogues;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.catalogues'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Catalogues') ? [] : ['className' => 'App\Model\Table\CataloguesTable'];
        $this->Catalogues = TableRegistry::get('Catalogues', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Catalogues);

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
