<div class="mETRICAs form">
<?php echo $this->Form->create('METRICA'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add M E T R I C A'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('para_propuesta');
		echo $this->Form->input('para_proyecto');
		echo $this->Form->input('para_servicio');
		echo $this->Form->input('unidades');
		echo $this->Form->input('dominio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List M E T R I C As'), array('action' => 'index')); ?></li>
	</ul>
</div>
