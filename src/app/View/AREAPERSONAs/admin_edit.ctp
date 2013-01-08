<div class="aREAPERSONAs form">
<?php echo $this->Form->create('AREAPERSONA'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit A R E A P E R S O N A'); ?></legend>
	<?php
		echo $this->Form->input('area_funcional_id');
		echo $this->Form->input('persona_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AREAPERSONA.area_funcional_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AREAPERSONA.area_funcional_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List A R E A P E R S O N As'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Area Funcionals'), array('controller' => 'area_funcionals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area Funcional'), array('controller' => 'area_funcionals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>