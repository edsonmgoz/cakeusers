<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fullname');
		echo $this->Form->input('username');
		echo $this->Form->input('password', array('required' => false, 'value' => ''));
		echo $this->Form->input('role', array('type' => 'select', 'options' => array('admin' => 'Administrador', 'user' => 'Usuario'), array('class' => 'form-control')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Logout'), array('action' => 'logout')); ?></li>
	</ul>
</div>
