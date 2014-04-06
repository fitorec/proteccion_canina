<?php
/**
 * proteccion-canina
 * Vista:  Vacunas Index
 */

#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Vacunas Index');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', 'Vacunas Index', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-vacunas.index.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-vacunas.index.js',
#	),
#		array('inline' => false)
#);
?>
<div class="row-fluid">
	<div class="actions col-md-2 well sidebar-nav">
	<h3>Acciones</h3>
	<ul class="nav nav-list">
		<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar',
			array('action' => 'agregar'),
			array('escape' => false)
		); ?>
		</li>
			<li class='divider'></li>
			<li class='nav-header'>
				Enfermedades
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Listar',
			array('controller' => 'enfermedades', 'action' => 'index'),
			array('escape' => false)
		); ?>
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar',
			array('controller' => 'enfermedades', 'action' => 'agregar'),
			array('escape' => false)
		); ?>
			</li>
			<li class='divider'></li>
			<li class='nav-header'>
				Perros
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Listar',
			array('controller' => 'perros', 'action' => 'index'),
			array('escape' => false)
		); ?>
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar',
			array('controller' => 'perros', 'action' => 'agregar'),
			array('escape' => false)
		); ?>
			</li>
	</ul>
</div>

<div class="vacunas index col-md-9">
	<div class="stacked widget widget-table">
		<div class="widget-header">
			<span class="icon-list-alt"></span>
			<h3>Lista de vacunas</h3>
		</div>
	<div class="widget-content">
	<table class="table table-bordered table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('nombre', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('created', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('modified', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th class="actions">Acciones</th>
	</tr>
	</thead>
	<tbody>
	
	<?php
		foreach ($vacunas as $vacuna): ?>
		<tr>
		<td>
			<?php echo $this->Html->link(
			$vacuna['Vacuna']['id'],
			array('action' => 'ver', $vacuna['Vacuna']['id'])
			); ?>
		</td>
		<td>
			<?php echo h($vacuna['Vacuna']['nombre']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($vacuna['Vacuna']['descripcion']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($vacuna['Vacuna']['created']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($vacuna['Vacuna']['modified']); ?>&nbsp;
		</td>
		<td class="actions"><div class="btn-group">
	<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li>
	<?php 
		echo $this->Html->link(
		'<i class="icon-eye-open"></i> Ver',
		array('action' => 'ver', $vacuna['Vacuna']['id']),
		array('escape' => false)
	); ?>
		</li>
		<li>
	<?php 
		echo $this->Html->link(
		'<i class="icon-pencil"></i> Editar',
		array('action' => 'editar', $vacuna['Vacuna']['id']),
		array('escape' => false)
	); ?>
		</li>
		<li>
	<?php 
		echo $this->Form->postLink(
		'<i class="icon-trash"></i> Borrar',
		array('action' => 'borrar', $vacuna['Vacuna']['id']),
		array('escape' => false),
		'¿Deseas eliminar este registro?'
	); ?>
		</li>
	</ul>
</div>
</td>
</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
</div>
	<small class="pull-right">
	<?php
	echo $this->Paginator->counter(array(
	'format' => 'Página {:page} de {:pages}, viendo {:current} Vacunas de un total de {:count}, iniciando en el registro {:start}, cabando en {:end}'
	));
	?>
	</small>
<div class="paging">
	<?php
		echo $this->Paginator->prev('< Anterior', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next('Siguiente >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
</div>
