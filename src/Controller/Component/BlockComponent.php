<?php
namespace Cirici\Blocks\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;
use Cirici\Blocks\Utility\BlocksTrait;

class BlockComponent extends Component
{
    use BlocksTrait;

    /**
     * {@inheritdoc}
     *
     * @param \Cake\Controller\ComponentRegistry $registry A ComponentRegistry
     *                                                     this component can use
     *                                                     to lazy load its components.
     * @param array $config Array of configuration settings.
     */
    public function __construct(ComponentRegistry $registry, array $config = [])
    {
        parent::__construct($registry, $config);

        $this->table = Configure::read('Blocks.table');

        if ($this->config('table')) {
            $this->table = $this->config('table');
        }

        $this->Blocks = TableRegistry::get($this->table);
    }
}
