<?php
namespace Cirici\Blocks\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BlBlocksFixture
 *
 */
class BlBlocksFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'title' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'slug' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'content' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'welcome',
            'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat.',
            'created' => '2015-12-31 15:23:57',
            'modified' => '2015-12-31 15:23:57'
        ],
        [
            'id' => 2,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'here-are-some-blocks',
            'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat.',
            'created' => '2015-12-31 15:23:57',
            'modified' => '2015-12-31 15:23:57'
        ],
        [
            'id' => 3,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'just-for-testing-purposes',
            'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat.',
            'created' => '2015-12-31 15:23:57',
            'modified' => '2015-12-31 15:23:57'
        ],
        [
            'id' => 4,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'what-else-could-i-say',
            'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat.',
            'created' => '2015-12-31 15:23:57',
            'modified' => '2015-12-31 15:23:57'
        ],
    ];
}
