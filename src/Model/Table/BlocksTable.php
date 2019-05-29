<?php
namespace Cirici\Blocks\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class BlocksTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('bl_blocks');

        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Cirici/Files.Filed');
        $this->addBehavior('Tools.Slugged', [
            'unique' => true,
            'case' => 'low',
        ]);
        $this->addBehavior('Search.Search');
        $this->searchManager()
            ->add('search', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => [
                    'title',
                    'slug'
                ],
            ])
        ;
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
            ->notEmpty('title')
        ;

        $validator
            ->notEmpty('slug')
        ;

        return $validator;
    }

    /**
     * Retrieves an entire block from given identifier
     *
     * @param  string $slug The block's slug.
     * @return array
     */
    public function getBlock($slug)
    {
        $block = $this->find('all')
            ->where(['slug' => $slug])
            ->first()
        ;

        return $block;
    }

    /**
     * Just returns the contents of a block.
     *
     * @param  string $slug The block's slug.
     * @return string
     */
    public function getContents($slug)
    {
        if (!$block = $this->getBlock($slug)) {
            return false;
        }

        return $block->content;
    }
}
