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

    public function testConstruct()
    {
        $this->assertAttributeEquals(
            'Cirici/Blocks.Blocks',
            'table',
            $this->Blocks
        );

        $this->assertAttributeEquals(
            'BlBlocks',
            'table',
            new BlocksHelper($this->view, ['table' => 'BlBlocks'])
        );
    }

    /**
     * Tests BlocksHelper.
     *
     * @return void
     */
    public function testGetContents()
    {
        $block = $this->Blocks->getContents('welcome');
        $this->assertEquals('Lorem ipsum dolor sit amet, aliquet feugiat.', $block);
    }

    /**
     * Tests BlocksHelper.
     *
     * @return void
     */
    public function testGet()
    {
        $block = $this->Blocks->get('welcome');
        $this->assertInstanceOf('Cirici\Blocks\Model\Entity\Block', $block);
    }
}
