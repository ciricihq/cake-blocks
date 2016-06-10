<?php
namespace Cirici\Blocks\Test\TestCase\Model\Table;

use Cake\I18n\FrozenTime;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Cirici\Blocks\Model\Table\BlocksTable;

/**
 * BlocksTable Test Case
 *
 * @coversDefaultClass \Cirici\Blocks\Model\Table\BlocksTable
 */
class BlocksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Cirici\Blocks\Model\Table\BlocksTable
     */
    public $Blocks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.cirici/blocks.bl_blocks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Blocks') ? [] : ['className' => 'Cirici\Blocks\Model\Table\BlocksTable'];
        $this->Blocks = TableRegistry::get('Blocks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Blocks);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @covers ::initialize
     * @return void
     */
    public function testInitialize()
    {
        $this->assertTrue($this->Blocks->hasBehavior('Timestamp'));
    }

    /**
     * Test validationDefault method
     *
     * @covers ::initialize
     * @covers ::validationDefault
     * @return void
     */
    public function testValidationDefault()
    {
        $block = [
            'title' => 'El títol del bloc',
            'slug' => 'el-titol-del-bloc',
            'content' => '<h1>Títol</h1><p>Contingut</p>'
        ];
        $block = $this->Blocks->newEntity($block);
        $this->assertTrue(empty($block->errors()));

        $block = [
            'title' => null,
            'slug' => 'el-titol-del-bloc',
            'content' => '<h1>Títol</h1><p>Contingut</p>'
        ];
        $block = $this->Blocks->newEntity($block);
        $this->assertFalse(empty($block->errors()));

        $block = [
            'title' => 'El títol del bloc',
            'slug' => null,
            'content' => '<h1>Títol</h1><p>Contingut</p>'
        ];
        $block = $this->Blocks->newEntity($block);
        $this->assertFalse(empty($block->errors()));
    }

    /**
     * Test getFull method
     *
     * @return void
     */
    public function testGetBlock()
    {
        $expected = [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'welcome',
            'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat.',
            'created' => new FrozenTime('2015-12-31 15:23:57'),
            'modified' => new FrozenTime('2015-12-31 15:23:57')
        ];
        $block = $this->Blocks->getBlock('welcome');
        $this->assertInstanceOf('Cirici\Blocks\Model\Entity\Block', $block);
        $this->assertArraySubset($expected, $block->toArray());
    }

    /**
     * Test get method
     *
     * @return void
     */
    public function testGetContents()
    {
        $block = $this->Blocks->getContents('welcome');
        $this->assertEquals('Lorem ipsum dolor sit amet, aliquet feugiat.', $block);

        $block = $this->Blocks->getContents('me-l-invento');
        $this->assertFalse($block);
    }
}
