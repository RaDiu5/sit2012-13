<div class="aREAFUNCIONALs form">
<?php echo $this->Form->create('AREAFUNCIONAL'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add A R E A F U N C I O N A L'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('action' => 'index')); ?></li>
	</ul>
</div>
