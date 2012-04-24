<div class="testimonials form">
<?php echo $this->Form->create('Testimonial');?>
	<fieldset>
		<legend><?php echo __('Edit Testimonial'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('copy');
		echo $this->Form->input('author');
		echo $this->Form->input('link');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), '/admin/testimonials/delete/'.$this->Form->value('Testimonial.id'), null, __('Are you sure you want to delete # %s?', $this->Form->value('Testimonial.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Testimonials'), '/admin/testimonials');?></li>
	</ul>
</div>
