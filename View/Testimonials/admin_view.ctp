<div class="testimonials view">
<h2><?php  echo __('Testimonial');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Copy'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['copy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($testimonial['Testimonial']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Testimonial'), '/admin/testimonials/edit/'.$testimonial['Testimonial']['id']); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Testimonial'), '/admin/testimonials/delete/'.$testimonial['Testimonial']['id'], null, __('Are you sure you want to delete # %s?', $testimonial['Testimonial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Testimonials'), '/admin/testimonials'); ?> </li>
		<li><?php echo $this->Html->link(__('New Testimonial'), '/admin/testimonials/add'); ?> </li>
	</ul>
</div>
