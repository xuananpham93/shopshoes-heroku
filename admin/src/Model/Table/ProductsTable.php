<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


/**
 * Products Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cats
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsTable extends Table
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

        $this->table('products');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Catproducts', [
            'foreignKey' => 'cat_id'
        ]);
        $this->belongsTo('Brands', [
            'foreignKey' => 'brand_id'
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
            ->allowEmpty('alias');

        $validator
            ->allowEmpty('price');

        $validator
            ->allowEmpty('orginal_price');

        $validator
            ->allowEmpty('code');

        $validator
            ->integer('type')
            ->allowEmpty('type');

        $validator
            ->allowEmpty('shortdes');

        $validator
            ->allowEmpty('content');

        $validator
            ->allowEmpty('images');

        $validator
            ->integer('pos')
            ->allowEmpty('pos');

        $validator
            ->integer('like')
            ->allowEmpty('like');
            
        $validator
            ->integer('hot')
            ->allowEmpty('hot');

        $validator
            ->integer('saleoff')
            ->allowEmpty('saleoff');

        $validator
            ->integer('highlight')
            ->allowEmpty('highlight');

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
        $rules->add($rules->existsIn(['cat_id'], 'Catproducts'));

        return $rules;
    }
}
