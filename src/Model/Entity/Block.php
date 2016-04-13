<?php
namespace Cirici\Blocks\Model\Entity;

use Cake\ORM\Entity;

class Block extends Entity
{
    protected $_accessible = [
        '*' => false,
        'title' => true,
        'slug' => true,
        'content' => true
    ];
}
