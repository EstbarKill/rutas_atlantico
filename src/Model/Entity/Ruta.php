<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ruta Entity
 *
 * @property int $ruta_id
 * @property string $ruta_nombre
 * @property string $ruta_descripcion
 * @property int $ruta_parada_inicio_id
 * @property int $ruta_parada_final_id
 * @property int $id_estado
 */
class Ruta extends Entity
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
        'ruta_nombre' => true,
        'ruta_descripcion' => true,
        'ruta_parada_inicio_id' => true,
        'ruta_parada_final_id' => true,
        'id_estado' => true,
    ];
}
