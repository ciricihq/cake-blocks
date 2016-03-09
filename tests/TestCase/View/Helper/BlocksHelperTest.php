<?php
namespace Cirici\Blocks\Test\TestCase\View\Helper;

use Cake\I18n\FrozenTime;
use Cake\TestSuite\TestCase;
use Cake\View\View;
use Cirici\Blocks\View\Helper\BlocksHelper;

/**
 * Blocks\View\Helper\BlocksHelper Test Case
 */
class BlocksHelperTest extends TestCase
{
    public $fixtures = ['plugin.Cirici/Blocks.blBlocks'];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Blocks = new BlocksHelper($view);
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
     * Test getFull method
     *
     * @return void
     */
    public function testGetFull()
    {
        $expected = [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'welcome-to-metropolitan',
            'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat.',
            'created' => new FrozenTime('2015-12-31 15:23:57'),
            'modified' => new FrozenTime('2015-12-31 15:23:57')
        ];
        $block = $this->Blocks->getFull('welcome-to-metropolitan');
        $this->assertArraySubset($expected, $block);
    }

    /**
     * Test get method
     *
     * @return void
     */
    public function testGet()
    {
        $block = $this->Blocks->get('welcome-to-metropolitan');
        $this->assertEquals('Lorem ipsum dolor sit amet, aliquet feugiat.', $block);
    }
}
