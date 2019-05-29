<?php
$this->extend('Intranet./Layout/index');
$this->assign('title', __('blocks'));
?>
<thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('slug', __('slug')) ?></th>
        <th scope="col"><?= $this->Paginator->sort('title', __('title')) ?></th>
        <th scope="col"><?= $this->Paginator->sort('content', __('content')) ?></th>
        <th scope="col"><?= $this->Paginator->sort('created', __('created')) ?></th>
        <th scope="col"><?= $this->Paginator->sort('modified', __('modified')) ?></th>
        <th scope="col" class="actions"><?= __('actions') ?></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($blocks as $block): ?>
    <tr>
        <td><?= $this->Number->format($block->id) ?></td>
        <td><?= $block->slug ?></td>
        <td><?= $block->title ?></td>
        <td><?= $this->Text->truncate(strip_tags($block->content), 100) ?></td>
        <td><?= $block->created ? $block->created->format('d-m-Y') : null ?></td>
        <td><?= $block->modified ? $block->modified->format('d-m-Y') : null ?></td>
        <td class="actions btn-group">
            <?php
            if ($this->Auth->userCan(['controller' => 'Blocks', 'action' => 'edit', 'prefix' => 'admin'])) {
                echo $this->Html->link(
                    __('button.edit'),
                    ['action' => 'edit', $block->id],
                    [
                        'escape' => false,
                        'class' => 'btn btn-info btn-xs',
                        'title' => __('edit'),
                    ]
                );
            }
            if ($this->Auth->userCan(['controller' => 'Blocks', 'action' => 'delete', 'prefix' => 'admin'])) {
                echo $this->Form->postLink(
                    __('button.delete'),
                    ['action' => 'delete', $block->id],
                    [
                        'confirm' => __('Are you sure you want to delete # {0}?', $block->id),
                        'escape' => false,
                        'class' => 'btn btn-danger btn-xs',
                        'title' => __('delete'),
                    ]
                );
            }
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</tbody>