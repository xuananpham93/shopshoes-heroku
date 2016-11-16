<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Supports Model
 *
 * @method \App\Model\Entity\Support get($primaryKey, $options = [])
 * @method \App\Model\Entity\Support newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Support[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Support|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Support patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Support[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Support findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SupportsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('supports');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->requirePresence('duty', 'create')
            ->notEmpty('duty');

        $validator
            ->allowEmpty('yahoo');

        $validator
            ->allowEmpty('skype');

        $validator
            ->requirePresence('hotline', 'create')
            ->notEmpty('hotline');

        $validator
            ->integer('pos')
            ->allowEmpty('pos');

        $validator
            ->integer('type')
            ->allowEmpty('type');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        return $validator;
    }
}
