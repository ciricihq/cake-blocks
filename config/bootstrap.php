<?php
use Cake\Core\Configure;

Configure::write('Blocks', [
    'table' => 'Cirici/Blocks.Blocks'
]);

if (file_exists(CONFIG . 'blocks.php')) {
    Configure::load('blocks');
}
