<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogradouroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogradouroTable Test Case
 */
class LogradouroTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LogradouroTable
     */
    public $Logradouro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.logradouro'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Logradouro') ? [] : ['className' => 'App\Model\Table\LogradouroTable'];
        $this->Logradouro = TableRegistry::get('Logradouro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Logradouro);

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
