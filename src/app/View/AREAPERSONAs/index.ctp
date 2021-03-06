<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li class="active">Area Persona<span class="divider">/</span></li>
</ul>
<div class="aREAPERSONAs index">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('&Aacute;rea Persona'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
		  			<? if ($puedeEditar) { ?>
					<li><?php echo $this->Html->link(__('Añadir Área Persona'), array('action' => 'add')); ?></li>
					<? } ?>
					<li><?php echo $this->Html->link(__('Ver Áreas Funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
					<!--<li><?php echo $this->Html->link(__('Añadir Área Funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>-->
					<li><?php echo $this->Html->link(__('Ver Personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
					<!--<li><?php echo $this->Html->link(__('Añadir Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>-->
				</ul>
		  	</div>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
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
			<?= $this->CrudActions->makeRowCrud($aREAPERSONA['AREAPERSONA']['id'], $puedeEditar	);?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} en total, empezando por {:start} y acabando en {:end}')
	));
	?>	</p>

	<div class="paginator">
    <ul>
    <?php
        if ($this->Paginator->hasNext() || $this->Paginator->hasPrev()){
            echo $this->Paginator->prev('<<<', array('class'=>'btn'), null, array('class' => 'btn prev disabled'));
            echo $this->Paginator->numbers(array('separator'=>'','class'=>"btn", 'href=#', 'tag'=>'li'));
            echo $this->Paginator->next('>>>', array('class'=>'btn'), null, array('class' => 'btn next disabled'));
        }
    ?>
    </ul>
    </div>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New A R E A P E R S O N A'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area Funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
