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
        $Block = TableRegistry::get('Cirici/Blocks.Blocks');
        $Blocks = $Block
            ->find('all')
            ->where(['slug' => $slug])
            ->first()
        ;

        return $Blocks->toArray();
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
