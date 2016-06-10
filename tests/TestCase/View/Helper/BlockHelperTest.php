<?php
namespace Cirici\Blocks\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Cirici\Blocks\View\Helper\BlockHelper;

/**
 * Blocks\View\Helper\BlocksHelper Test Case
 */
class BlockHelperTest extends TestCase
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
        $this->Block = new BlockHelper($this->view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Block);

        parent::tearDown();
    }

    public function testConstruct()
    {
        $this->assertAttributeEquals(
            'Cirici/Blocks.Blocks',
            'table',
            $this->Block
        );

        $this->assertAttributeEquals(
            'BlBlocks',
            'table',
            new BlockHelper($this->view, ['table' => 'BlBlocks'])
        );
    }

    /**
     * Tests BlocksHelper.
     *
     * @return void
     */
    public function testGetContents()
    {
        $block = $this->Block->getContents('welcome');
        $this->assertEquals('Lorem ipsum dolor sit amet, aliquet feugiat.', $block);
    }

    /**
     * Tests BlocksHelper.
     *
     * @return void
     */
    public function testGet()
    {
        $block = $this->Block->get('welcome');
        $this->assertInstanceOf('Cirici\Blocks\Model\Entity\Block', $block);
    }
}
