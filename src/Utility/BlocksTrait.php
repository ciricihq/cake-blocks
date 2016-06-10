<?php
namespace Cirici\Blocks\Utility;

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
