<div class="nOTIFICACIONs index">
	<h2><?php echo __('N O T I F I C A C I O Ns'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_notificacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('texto'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($nOTIFICACIONs as $nOTIFICACION): ?>
	<tr>
		<td><?php echo h($nOTIFICACION['NOTIFICACION']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($nOTIFICACION['Persona']['nombre'], array('controller' => 'p_e_r_s_o_n_as', 'action' => 'view', $nOTIFICACION['Persona']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($nOTIFICACION['TipoNotificacion']['mensaje'], array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'view', $nOTIFICACION['TipoNotificacion']['id'])); ?>
		</td>
		<td><?php echo h($nOTIFICACION['NOTIFICACION']['texto']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $nOTIFICACION['NOTIFICACION']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $nOTIFICACION['NOTIFICACION']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $nOTIFICACION['NOTIFICACION']['id']), null, __('Are you sure you want to delete # %s?', $nOTIFICACION['NOTIFICACION']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New N O T I F I C A C I O N'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Notificacion'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'add')); ?> </li>
	</ul>
</div>
