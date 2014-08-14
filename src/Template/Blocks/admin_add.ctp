<?php

$options = array('inputDefaults' => array('div' => 'form-group', 'class' => 'form-control'));
if ($this->action == 'admin_edit' && Configure::read('App.multilang')) {
    $options += array('url'=> $this->params['pass']);
}
echo $this->Form->create('Block', $options);?>
<section class="col-lg-12">
<?php
	echo $this->Form->input('title', array('label' => __d('blocks', 'Title', true)));
	echo $this->Form->input('content', array(
        'label'        => __d('blocks', 'Content', true),
        'data-toolbar' => 'full'
    ));
	echo $this->element('admin/form_bottom_buttons');
?>
</section>
<?php echo $this->Form->end(); ?>
