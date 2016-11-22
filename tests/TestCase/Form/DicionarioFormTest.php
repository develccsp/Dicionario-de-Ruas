<?php
namespace App\Test\TestCase\Form;

use App\Form\DicionarioForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\DicionarioForm Test Case
 */
class DicionarioFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\DicionarioForm
     */
    public $Dicionario;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Dicionario = new DicionarioForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dicionario);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
