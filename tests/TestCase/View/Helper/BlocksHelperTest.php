<?php
namespace Cirici\Blocks\Test\TestCase\View\Helper;

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
        $this->view = new View();
        $this->Blocks = new BlocksHelper($this->view);
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
     * Tests BlocksHelper.
     *
     * @return void
     */
    public function testConstruct()
    {
        $block = $this->Blocks->getContents('welcome');
        $this->assertEquals('Lorem ipsum dolor sit amet, aliquet feugiat.', $block);
    }
}
