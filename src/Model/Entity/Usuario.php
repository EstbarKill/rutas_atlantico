<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id_usuario
 * @property string $usuario_nombre
 * @property string $usuario_apellido
 * @property string $usuario_contrasena
 * @property string $usuario_correo
 * @property float $usuario_telefono
 */
class Usuario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'usuario_nombre' => true,
        'usuario_apellido' => true,
        'usuario_contrasena' => true,
        'usuario_correo' => true,
        'usuario_telefono' => true,
    ];
}
