<?php
namespace Cirici\Blocks\Utility;

use Cake\Core\Configure;
use Cake\ORM\TableRegistry;

trait BlocksTrait
{
    /**
     * The table used by this component.
     *
     * @var string
     */
    protected $table;

    /**
     * The Blocks table instance
     * @var Cirici\Blocks\Model\Table\Blocks
     */
    protected $Blocks;

    /**
     * Used to initialize the BlocksTable instance.
     *
     * @param  array  $config Array of additional configuration options.
     * @return void
     */
    public function initializeBlocks(array $config = [])
    {
        $this->table = Configure::read('Blocks.table');

        if (isset($config['table'])) {
            $this->table = $config['table'];
        }

        $this->Blocks = TableRegistry::get($this->table);
    }

    /**
     * Retrieves an entire block from given identifier
     *
     * @param  string $slug The block's slug.
     * @return array
     */
    public function get($slug)
    {
        return $this->Blocks->getBlock($slug);
    }

    /**
     * Just returns the contents of a block.
     *
     * @param  string $slug The block's slug.
     * @return string
     */
    public function getContents($slug)
    {
        return $this->Blocks->getContents($slug);
    }
}
