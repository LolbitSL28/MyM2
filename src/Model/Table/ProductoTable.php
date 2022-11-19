<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Producto Model
 *
 * @method \App\Model\Entity\Producto newEmptyEntity()
 * @method \App\Model\Entity\Producto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Producto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Producto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Producto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Producto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Producto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Producto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductoTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('producto');
        $this->setDisplayField('Id_Producto');
        $this->setPrimaryKey('Id_Producto');
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
            ->integer('Id_Categoria')
            ->requirePresence('Id_Categoria', 'create')
            ->notEmptyString('Id_Categoria');

        $validator
            ->scalar('Nombre_Prod')
            ->maxLength('Nombre_Prod', 45)
            ->requirePresence('Nombre_Prod', 'create')
            ->notEmptyString('Nombre_Prod');

        $validator
            ->scalar('Descripcion_Producto')
            ->maxLength('Descripcion_Producto', 200)
            ->requirePresence('Descripcion_Producto', 'create')
            ->notEmptyString('Descripcion_Producto');

        $validator
            ->scalar('Marca')
            ->maxLength('Marca', 45)
            ->requirePresence('Marca', 'create')
            ->notEmptyString('Marca');

        $validator
            ->integer('Cant_Prod')
            ->requirePresence('Cant_Prod', 'create')
            ->notEmptyString('Cant_Prod');

        $validator
            ->integer('Precio')
            ->requirePresence('Precio', 'create')
            ->notEmptyString('Precio');

        $validator
            ->integer('Id_Prov')
            ->requirePresence('Id_Prov', 'create')
            ->notEmptyString('Id_Prov');

        return $validator;
    }
}