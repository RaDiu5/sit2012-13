<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li class="active">&Aacute;reas Funcionales<span class="divider">/</span></li>
</ul>
<div class="aREAFUNCIONALs index">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('Áreas Funcionales'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
		  			<? if ($puedeEditar) { ?>
					<li><?php echo $this->Html->link(__('Añadir Área Funcional'), array('action' => 'add')); ?></li>
					<? } ?>
				</ul>
		  	</div>
		</div>
	</div>
	<!--<h2><?php echo __('A R E A F U N C I O N A Ls'); ?></h2>-->
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($aREAFUNCIONALs as $aREAFUNCIONAL): ?>
	<tr>
		<td><?php echo h($aREAFUNCIONAL['AREAFUNCIONAL']['id']); ?>&nbsp;</td>
		<td><?php echo h($aREAFUNCIONAL['AREAFUNCIONAL']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->CrudActions->makeRowCrud($aREAFUNCIONAL['AREAFUNCIONAL']['id'], $puedeEditar);?>
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
		<li><?php echo $this->Html->link(__('New A R E A F U N C I O N A L'), array('action' => 'add')); ?></li>
	</ul>-->
</div>
