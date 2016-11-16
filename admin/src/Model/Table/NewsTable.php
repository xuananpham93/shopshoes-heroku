<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * News Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Catalogues
 *
 * @method \App\Model\Entity\News get($primaryKey, $options = [])
 * @method \App\Model\Entity\News newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\News[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\News|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\News patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\News[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\News findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NewsTable extends Table
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

        $this->table('news');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Catalogues', [
            'foreignKey' => 'catalogue_id'
        ]);
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
            // ->requirePresence('name_en', 'create')
            ->allowEmpty('name_en');

        $validator
            ->allowEmpty('alias');

        $validator
            ->integer('type')
            ->allowEmpty('type');

        $validator
            ->allowEmpty('shortdes');

        $validator
            // ->requirePresence('shortdes_en', 'create')
            ->allowEmpty('shortdes_en');

        $validator
            ->allowEmpty('content');

        $validator
            // ->requirePresence('content_en', 'create')
            ->allowEmpty('content_en');

        $validator
            ->allowEmpty('images');

        $validator
            ->integer('pos')
            ->allowEmpty('pos');

        $validator
            ->integer('new')
            ->allowEmpty('new');

        $validator
            ->integer('hot')
            ->allowEmpty('hot');

        $validator
            ->integer('saleoff')
            ->allowEmpty('saleoff');

        $validator
            ->allowEmpty('title_seo');

        $validator
            ->allowEmpty('meta_key');

        $validator
            ->allowEmpty('meta_des');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->integer('view')
            ->allowEmpty('view');

        $validator
            ->allowEmpty('slug');

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
        $rules->add($rules->existsIn(['catalogue_id'], 'Catalogues'));

        return $rules;
    }
}
