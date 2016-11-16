<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Settings Model
 *
 * @method \App\Model\Entity\Setting get($primaryKey, $options = [])
 * @method \App\Model\Entity\Setting newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Setting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Setting|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Setting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Setting[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Setting findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SettingsTable extends Table
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

        $this->table('settings');
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
            ->allowEmpty('title');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('contactinfo');

        $validator
            ->allowEmpty('info');

        $validator
            // ->requirePresence('gmaps', 'create')
            ->allowEmpty('gmaps');

        $validator
            // ->requirePresence('maps', 'create')
            ->allowEmpty('maps');

        $validator
            // ->requirePresence('analytics', 'create')
            ->allowEmpty('analytics');

        $validator
            ->allowEmpty('telephone');

        $validator
            ->allowEmpty('phone');

        $validator
            ->allowEmpty('hotline');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('url');

        $validator
            ->allowEmpty('meta_key');

        $validator
            ->allowEmpty('meta_des');

        $validator
            ->allowEmpty('youtube');

        $validator
            ->allowEmpty('twitter');

        $validator
            ->allowEmpty('yahoo');

        $validator
            ->allowEmpty('facebook');

        $validator
            // ->requirePresence('images', 'create')
            ->allowEmpty('images');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
