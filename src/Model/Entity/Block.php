<?php
namespace Blocks\Model\Entity;

use Cake\ORM\Entity;

class Block extends Entity
{
    protected $_accessible = [
        'id' => true,
        'title' => true,
        'slug' => true,
        'content' => true,
        'created' => true,
        'modified' => true
    ];
}
