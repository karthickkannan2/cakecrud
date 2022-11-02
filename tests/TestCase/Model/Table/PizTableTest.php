<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PizTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PizTable Test Case
 */
class PizTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PizTable
     */
    protected $Piz;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Piz',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Piz') ? [] : ['className' => PizTable::class];
        $this->Piz = $this->getTableLocator()->get('Piz', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Piz);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PizTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
