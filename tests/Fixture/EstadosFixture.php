<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstadosFixture
 */
class EstadosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_estado' => 1,
                'estado_nombre' => 'Lorem ipsum dolor sit amet',
                'estado_descripcion' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
