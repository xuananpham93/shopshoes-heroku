<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Slideshows Model
 *
 * @method \App\Model\Entity\Slideshow get($primaryKey, $options = [])
 * @method \App\Model\Entity\Slideshow newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Slideshow[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Slideshow|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Slideshow patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Slideshow[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Slideshow findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SlideshowsTable extends Table
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

        $this->table('slideshows');
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
            // ->requirePresence('link', 'create')
            ->allowEmpty('link');

        $validator
            ->allowEmpty('images');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->integer('pos')
            ->allowEmpty('pos');

        return $validator;
    }
}
