<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/CARTERAs/index">Cartera</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
<div class="cARTERAs view">
<legend>
	<div class="row-fluid">
		<div class="span2">
				<strong><?php echo __('Ver cartera'); ?></strong>
		</div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
		  			<? if ($puedeEditar) { ?>
					<li><?php echo $this->Html->link(__('Editar Cartera'), array('action' => 'edit', $cARTERA['CARTERA']['id'])); ?> </li>
					<li><?php echo $this->Form->postLink(__('Eliminar Cartera'), array('action' => 'delete', $cARTERA['CARTERA']['id']), null, __('Are you sure you want to delete # %s?', $cARTERA['CARTERA']['id'])); ?> </li>
					<? } ?>
					<li><?php echo $this->Html->link(__('Ver Carteras'), array('action' => 'index')); ?> </li>
					<!--<li><?php echo $this->Html->link(__('Añadir Cartera'), array('action' => 'add')); ?> </li>-->
		  		</ul>
		  </div>
		</div>
	</div>
	</legend>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span6">
		<tr>
			<td><strong><?php echo __('Id'); ?></strong></td>
			<td>
				<?php echo h($cARTERA['CARTERA']['id']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Fecha Creación'); ?></strong></td>
			<td>
				<?php echo h($cARTERA['CARTERA']['fecha_creacion']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Fecha Inicio Periodo'); ?></strong></td>
			<td>
				<?php echo h($cARTERA['CARTERA']['fecha_inicio_periodo']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Fecha Fin Periodo'); ?></strong></td>
			<td>
				<?php echo h($cARTERA['CARTERA']['fecha_fin_periodo']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Fecha Última Discusion'); ?></strong></td>
			<td>
				<?php echo h($cARTERA['CARTERA']['fecha_ultima_discusion']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Fecha Obtencion Definitiva'); ?></strong></td>
			<td>
				<?php echo h($cARTERA['CARTERA']['fecha_obtencion_definitiva']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Fecha Inicio Validez'); ?></strong></td>
			<td>
				<?php echo h($cARTERA['CARTERA']['fecha_inicio_validez']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Fecha Fin Validez'); ?></strong></td>
			<td>
				<?php echo h($cARTERA['CARTERA']['fecha_fin_validez']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Fecha Ultima Modificacion'); ?></strong></td>
			<td>
				<?php echo h($cARTERA['CARTERA']['fecha_ultima_modificacion']); ?>
				&nbsp;
			</td>
		</tr>
	</table>
	
	<?php if (!empty($cARTERA['PROYECTO'])): ?>
		<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span12">
		<thead>
			<tr>
				<th>Proyectos relacionados con el servicio.</th>
			</tr>
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Codigo'); ?></th>
				<th><?php echo __('Nombre'); ?></th>
				<th><?php echo __('Fecha Inicio Prevista'); ?></th>
				<th><?php echo __('Fecha Inicio Real'); ?></th>
				<th><?php echo __('Fecha Fin Prevista'); ?></th>
				<th><?php echo __('Fecha Fin Real'); ?></th>
				<th><?php echo __('Descripcion'); ?></th>
			</tr>
		</thead>
		<tbody>
		<?php
			$i = 0;
			foreach ($cARTERA['PROYECTO'] as $pROYECTO): ?>
			<tr>
				<td><?php echo $pROYECTO['id']; ?></td>
				<td><?php echo $pROYECTO['codigo']; ?></td>
				<td><?php echo $pROYECTO['nombre']; ?></td>
				<td><?php echo $pROYECTO['fecha_inicio_prevista']; ?></td>
				<td><?php echo $pROYECTO['fecha_inicio_real']; ?></td>
				<td><?php echo $pROYECTO['fecha_fin_prevista']; ?></td>
				<td><?php echo $pROYECTO['fecha_fin_real']; ?></td>
				<td><?php echo $pROYECTO['descripcion']; ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
		</table>
	<?php endif; ?>
</div>
