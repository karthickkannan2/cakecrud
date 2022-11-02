<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PizFixture
 */
class PizFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'piz';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'ingredients' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1667374230,
            ],
        ];
        parent::init();
    }
}
