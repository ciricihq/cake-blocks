<section class="col-lg-12">
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th class="tight"><?php echo $this->Paginator->sort('id');?></th>
					<th><?php echo $this->Paginator->sort(__d('blocks', 'Slug', true), 'slug');?></th>
					<th><?php echo $this->Paginator->sort(__d('blocks', 'Title', true), 'title');?></th>
					<th><?php echo $this->Paginator->sort(__d('blocks', 'Content', true), 'content');?></th>
					<th class="datetime"><?php echo $this->Paginator->sort(__d('blocks', 'Created', true), 'created');?></th>
					<th class="datetime"><?php echo $this->Paginator->sort(__d('blocks', 'Modified', true), 'modified');?></th>
					<th><?php __d('blocks', 'Actions');?></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($blocks as $block): ?>
				<tr>
					<td class="tight"><?php echo $block['Block']['id']; ?></td>
					<td><?php echo $block['Block']['slug']; ?></td>
					<td><?php echo $block['Block']['title']; ?></td>
					<td><?php echo $this->Text->truncate(strip_tags($block['Block']['content']), 100); ?></td>
					<td class="datetime"><?php echo $this->Timei->datetime($block['Block']['created']); ?></td>
					<td class="datetime"><?php echo $this->Timei->datetime($block['Block']['modified']); ?></td>
					<td class="actions">
					<?php
						echo $this->element('admin/actions', array('data' => $block));
					?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<?php echo $this->element('admin/paginator') ?>
</section>
