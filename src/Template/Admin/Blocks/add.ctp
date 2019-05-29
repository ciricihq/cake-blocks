<?php
$this->extend('/Layout/Admin/add');

if (!isset($title)) {
    $title = __('blocks.add');
}

$this->assign('title', $title);

$this->Breadcrumbs->add(__('blocks'), [
    'controller' => $this->request->params['controller'],
    'action' => 'index'
]);

$this->Breadcrumbs->add($title);
echo $this->Form->create($block);
?>
<div class="box-body">
    <div class="col-sm-6">
        <?php
        echo $this->Form->input('title', [
            'label' => __('title'),
            'replaceLabel' => false
        ]);

        echo $this->Form->input('content', [
            'label' => __('content'),
            'data-ckeditor-enable' => true
        ]);

        echo $this->Form->input('position', [
            'label' => __('position'),
            'replaceLabel' => false
        ]);

        echo $this->element('Cirici/Files.uploader', [
            'fileType' => ["image/*"],
            'fileSizeLimit' => 300000,
            'uploadLimit' => 1,
            'files' => $block->filed,
            'filedType' => 'background',
            'label' => __('background')
        ]);
    ?>
    </div>
</div>
