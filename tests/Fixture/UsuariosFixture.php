<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 */
class UsuariosFixture extends TestFixture
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
                'id_usuario' => 1,
                'usuario_nombre' => 'Lorem ipsum dolor sit amet',
                'usuario_apellido' => 'Lorem ipsum dolor sit amet',
                'usuario_contrasena' => 'Lorem ipsum dolor sit amet',
                'usuario_correo' => 'Lorem ipsum dolor sit amet',
                'usuario_telefono' => 1,
            ],
        ];
        parent::init();
    }
}
