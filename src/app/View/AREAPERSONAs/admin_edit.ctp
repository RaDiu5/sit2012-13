<div class="aREAPERSONAs form">
<?php echo $this->Form->create('AREAPERSONA'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit A R E A P E R S O N A'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('area_funcional_id');
		echo $this->Form->input('persona_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AREAPERSONA.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AREAPERSONA.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List A R E A P E R S O N As'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area Funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
	</ul>
</div>
