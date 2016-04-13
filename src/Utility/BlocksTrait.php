<?php
namespace Cirici\Blocks\Utility;

use Cake\ORM\TableRegistry;

trait BlocksTrait
{
    /**
     * Retrieves an entire block from given identifier
     *
     * @param  string $slug The block's slug.
     * @return array
     */
    public function get($slug)
    {
        $blocks = TableRegistry::get('Cirici/Blocks.Blocks');
        $block = $blocks
            ->find('all')
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
        if (!$block = $this->get($slug)) {
            return false;
        }

        return $block->content;
    }
}
