<div class="testimonials index">
	<h2><?php echo __('Testimonials');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('copy');?></th>
			<th><?php echo $this->Paginator->sort('author');?></th>
			<th><?php echo $this->Paginator->sort('link');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($testimonials as $testimonial): ?>
	<tr>
		<td><?php echo h($testimonial['Testimonial']['id']); ?>&nbsp;</td>
		<td><?php echo h($testimonial['Testimonial']['copy']); ?>&nbsp;</td>
		<td><?php echo h($testimonial['Testimonial']['author']); ?>&nbsp;</td>
		<td><?php echo h($testimonial['Testimonial']['link']); ?>&nbsp;</td>
		<td><?php echo h($testimonial['Testimonial']['created']); ?>&nbsp;</td>
		<td><?php echo h($testimonial['Testimonial']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), '/admin/testimonials/view/'.$testimonial['Testimonial']['id']); ?>
			<?php echo $this->Html->link(__('Edit'), '/admin/testimonials/edit/'.$testimonial['Testimonial']['id']); ?>
			<?php echo $this->Form->postLink(__('Delete'), '/admin/testimonials/delete/'.$testimonial['Testimonial']['id'], null, __('Are you sure you want to delete # %s?', $testimonial['Testimonial']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Testimonial'), '/admin/testimonials/add'); ?></li>
	</ul>
</div>
