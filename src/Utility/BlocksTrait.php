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
    public function getFull($slug)
    {
        $blocksTable = TableRegistry::get('Cirici/Blocks.Blocks');
        $blocks = $blocksTable
            ->find('all')
            ->where(['slug' => $slug])
            ->first()
        ;

        return $blocks->toArray();
    }

    /**
     * Just returns the contents of a block.
     *
     * @param  string $slug The block's slug.
     * @return string
     */
    public function get($slug)
    {
        if (!$block = $this->getFull($slug)) {
            return false;
        }

        return $block['content'];
    }
}
