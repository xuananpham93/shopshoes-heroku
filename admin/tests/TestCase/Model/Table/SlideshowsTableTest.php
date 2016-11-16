<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SlideshowsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SlideshowsTable Test Case
 */
class SlideshowsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SlideshowsTable
     */
    public $Slideshows;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.slideshows'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Slideshows') ? [] : ['className' => 'App\Model\Table\SlideshowsTable'];
        $this->Slideshows = TableRegistry::get('Slideshows', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Slideshows);

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
