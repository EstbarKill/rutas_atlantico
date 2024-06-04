<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rutas Model
 *
 * @method \App\Model\Entity\Ruta newEmptyEntity()
 * @method \App\Model\Entity\Ruta newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Ruta> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ruta get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Ruta findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Ruta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Ruta> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ruta|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Ruta saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Ruta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ruta>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ruta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ruta> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ruta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ruta>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ruta>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ruta> deleteManyOrFail(iterable $entities, array $options = [])
 */
class RutasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('rutas');
        $this->setDisplayField('ruta_nombre');
        $this->setPrimaryKey('ruta_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('ruta_nombre')
            ->maxLength('ruta_nombre', 100)
            ->requirePresence('ruta_nombre', 'create')
            ->notEmptyString('ruta_nombre');

        $validator
            ->scalar('ruta_descripcion')
            ->requirePresence('ruta_descripcion', 'create')
            ->notEmptyString('ruta_descripcion');

        $validator
            ->integer('ruta_parada_inicio_id')
            ->requirePresence('ruta_parada_inicio_id', 'create')
            ->notEmptyString('ruta_parada_inicio_id');

        $validator
            ->integer('ruta_parada_final_id')
            ->requirePresence('ruta_parada_final_id', 'create')
            ->notEmptyString('ruta_parada_final_id');

        $validator
            ->integer('id_estado')
            ->requirePresence('id_estado', 'create')
            ->notEmptyString('id_estado');

        return $validator;
    }
}
