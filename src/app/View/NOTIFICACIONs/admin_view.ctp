<div class="nOTIFICACIONs view">
<h2><?php  echo __('N O T I F I C A C I O N'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($nOTIFICACION['NOTIFICACION']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($nOTIFICACION['Persona']['nombre'], array('controller' => 'p_e_r_s_o_n_as', 'action' => 'view', $nOTIFICACION['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Notificacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($nOTIFICACION['TipoNotificacion']['mensaje'], array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'view', $nOTIFICACION['TipoNotificacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($nOTIFICACION['NOTIFICACION']['texto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit N O T I F I C A C I O N'), array('action' => 'edit', $nOTIFICACION['NOTIFICACION']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete N O T I F I C A C I O N'), array('action' => 'delete', $nOTIFICACION['NOTIFICACION']['id']), null, __('Are you sure you want to delete # %s?', $nOTIFICACION['NOTIFICACION']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List N O T I F I C A C I O Ns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New N O T I F I C A C I O N'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Notificacion'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'add')); ?> </li>
	</ul>
</div>
