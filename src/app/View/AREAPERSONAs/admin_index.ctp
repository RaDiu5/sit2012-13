<div class="aREAPERSONAs index">
	<h2><?php echo __('A R E A P E R S O N As'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('area_funcional_id'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($aREAPERSONAs as $aREAPERSONA): ?>
	<tr>
		<td><?php echo h($aREAPERSONA['AREAPERSONA']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($aREAPERSONA['AreaFuncional']['nombre'], array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'view', $aREAPERSONA['AreaFuncional']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($aREAPERSONA['Persona']['nombre'], array('controller' => 'p_e_r_s_o_n_as', 'action' => 'view', $aREAPERSONA['Persona']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $aREAPERSONA['AREAPERSONA']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aREAPERSONA['AREAPERSONA']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aREAPERSONA['AREAPERSONA']['id']), null, __('Are you sure you want to delete # %s?', $aREAPERSONA['AREAPERSONA']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New A R E A P E R S O N A'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area Funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
	</ul>
</div>
