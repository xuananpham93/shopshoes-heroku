<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Catalogues Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentCatalogues
 * @property \Cake\ORM\Association\HasMany $ChildCatalogues
 *
 * @method \App\Model\Entity\Catalogue get($primaryKey, $options = [])
 * @method \App\Model\Entity\Catalogue newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Catalogue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Catalogue|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Catalogue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Catalogue[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Catalogue findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class CataloguesTable extends Table
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

        $this->table('catalogues');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Tree');

        $this->belongsTo('ParentCatalogues', [
            'className' => 'Catalogues',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildCatalogues', [
            'className' => 'Catalogues',
            'foreignKey' => 'parent_id'
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
            ->requirePresence('name_en', 'create')
            ->allowEmpty('name_en');

        $validator
            ->allowEmpty('alias');

        $validator
            ->allowEmpty('images');

        $validator
            ->integer('pos')
            ->allowEmpty('pos');

        $validator
            ->integer('hot')
            ->allowEmpty('hot');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->allowEmpty('title_seo');

        $validator
            ->allowEmpty('meta_key');

        $validator
            ->allowEmpty('meta_des');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentCatalogues'));

        return $rules;
    }
}
