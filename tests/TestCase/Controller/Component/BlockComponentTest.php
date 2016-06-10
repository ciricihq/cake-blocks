<?php
namespace Cirici\Blocks\Test\TestCase\Controller\Component;

use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;
use Cirici\Blocks\Controller\Component\BlockComponent;

/**
 * Cirici\Blocks\Controller\Component\BlockComponent Test Case
 */
class BlockComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Cirici\Blocks\Controller\Component\BlockComponent
     */
    public $BlockComponent;

    /**
     * Component Registry
     *
     * @var \Cake\Controller\ComponentRegistry
     */
    public $registry;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->registry = new ComponentRegistry();
        $this->BlockComponent = new BlockComponent($this->registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BlockComponent);

        parent::tearDown();
    }

    /**
     * Test __construct method
     *
     * @return void
     */
    public function testConstruct()
    {
        $this->assertAttributeEquals(
            'Cirici/Blocks.Blocks',
            'table',
            $this->BlockComponent
        );

        $this->assertAttributeEquals(
            'BlBlocks',
            'table',
            new BlockComponent($this->registry, ['table' => 'BlBlocks'])
        );
    }
}
