<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * Catproducts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentCatproducts
 * @property \Cake\ORM\Association\HasMany $ChildCatproducts
 *
 * @method \App\Model\Entity\Catproduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\Catproduct newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Catproduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Catproduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Catproduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Catproduct[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Catproduct findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class CatproductsTable extends Table
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

        $this->table('catproducts');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Tree');

        $this->belongsTo('ParentCatproducts', [
            'className' => 'Catproducts',
            'foreignKey' => 'parent_id'
            ]);
        $this->hasMany('ChildCatproducts', [
            'className' => 'Catproducts',
            'foreignKey' => 'parent_id'
            ]);
        $this->addBehavior('Tree');


        // Add the behaviour to your table
        $this->addBehavior('Search.Search');

        // Setup search filter using search manager
        $this->searchManager()
        ->value('author_id')
            // Here we will alias the 'q' query param to search the `Articles.title`
            // field and the `Articles.content` field, using a LIKE match, with `%`
            // both before and after.
        ->add('q', 'Search.Like', [
            'before' => true,
            'after' => true,
            'mode' => 'or',
            'comparison' => 'LIKE',
            'wildcardAny' => '*',
            'wildcardOne' => '?',
            'field' => ['title', 'content']
            ])
        ->add('foo', 'Search.Callback', [
            'callback' => function ($query, $args, $filter) {
                    // Modify $query as required
            }
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
        ->integer('saleoff')
        ->allowEmpty('saleoff');

        $validator
        ->allowEmpty('alias');

        $validator
        ->allowEmpty('images');

        $validator
        ->integer('pos')
        ->allowEmpty('pos');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentCatproducts'));

        return $rules;
    }



    public function searchConfiguration()
    {
        $search = new Manager($this);

        $search->like('title');

        return $search;
    }
}
