<?php
namespace Cirici\Blocks\View\Helper;

use Cake\Core\Configure;
use Cake\ORM\TableRegistry;
use Cake\View\Helper;
use Cake\View\View;
use Cirici\Blocks\Utility\BlocksTrait;

class BlockHelper extends Helper
{
    use BlocksTrait;

    /**
     * {@inheritdoc}
     *
     * @param \Cake\View\View $view The View this helper is being attached to.
     * @param array $config Configuration settings for the helper.
     */
    public function __construct(View $view, array $config = [])
    {
        parent::__construct($view, $config);

        $this->initializeBlocks($config);
    }
}
