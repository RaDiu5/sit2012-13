<div class="oBJETIVOESTRATEGICOs view">
<h2><?php  echo __('O B J E T I V O E S T R A T E G I C O'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Principio Tic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($oBJETIVOESTRATEGICO['PrincipioTic']['nombre'], array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'view', $oBJETIVOESTRATEGICO['PrincipioTic']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio'); ?></dt>
		<dd>
			<?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['fecha_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Fin'); ?></dt>
		<dd>
			<?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['fecha_fin']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit O B J E T I V O E S T R A T E G I C O'), array('action' => 'edit', $oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete O B J E T I V O E S T R A T E G I C O'), array('action' => 'delete', $oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['id']), null, __('Are you sure you want to delete # %s?', $oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List O B J E T I V O E S T R A T E G I C Os'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New O B J E T I V O E S T R A T E G I C O'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P R I N C I P I O T I Cs'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Principio Tic'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'add')); ?> </li>
	</ul>
</div>
