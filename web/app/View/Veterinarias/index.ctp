<?php
/**
 * proteccion-canina
 * Vista:  Veterinarias Index
 */
#iniciando la autenticación
$this->Html->initAuth($userAuth);

#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Veterinarias Index');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', 'Veterinarias Index', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-veterinarias.index.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-veterinarias.index.js',
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
				Posiciones
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Listar',
			array('controller' => 'posiciones', 'action' => 'index'),
			array('escape' => false)
		); ?>
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar',
			array('controller' => 'posiciones', 'action' => 'agregar'),
			array('escape' => false)
		); ?>
			</li>
	</ul>
</div>

<div class="veterinarias index col-md-9">
	<div class="stacked widget widget-table">
		<div class="widget-header">
			<span class="icon-list-alt"></span>
			<h3>Lista de veterinarias</h3>
		</div>
	<div class="widget-content">
	<table class="table table-bordered table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('nombre', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('direccion', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('posicion_id', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('contacto', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('telefono', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('direccion_web', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('email', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('created', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('modified', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th class="actions">Acciones</th>
	</tr>
	</thead>
	<tbody>
	
	<?php
		foreach ($veterinarias as $veterinaria): ?>
		<tr>
		<td>
			<?php echo $this->Html->link(
			$veterinaria['Veterinaria']['id'],
			array('action' => 'ver', $veterinaria['Veterinaria']['id'])
			); ?>
		</td>
		<td>
			<?php echo h($veterinaria['Veterinaria']['nombre']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($veterinaria['Veterinaria']['direccion']); ?>&nbsp;
		</td>
		<td>
			<?php echo $this->Html->link(
			$veterinaria['Posicion']['lat'],
			array('controller' => 'posiciones', 'action' => 'ver', $veterinaria['Posicion']['id'])
			);
			?>
		</td>
		<td>
			<?php echo h($veterinaria['Veterinaria']['contacto']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($veterinaria['Veterinaria']['telefono']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($veterinaria['Veterinaria']['direccion_web']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($veterinaria['Veterinaria']['email']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($veterinaria['Veterinaria']['created']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($veterinaria['Veterinaria']['modified']); ?>&nbsp;
		</td>
		<td class="actions"><div class="btn-group">
	<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li>
	<?php 
		echo $this->Html->link(
		'<i class="icon-eye-open"></i> Ver',
		array('action' => 'ver', $veterinaria['Veterinaria']['id']),
		array('escape' => false)
	); ?>
		</li>
		<li>
	<?php 
		echo $this->Html->link(
		'<i class="icon-pencil"></i> Editar',
		array('action' => 'editar', $veterinaria['Veterinaria']['id']),
		array('escape' => false)
	); ?>
		</li>
		<li>
	<?php 
		echo $this->Form->postLink(
		'<i class="icon-trash"></i> Borrar',
		array('action' => 'borrar', $veterinaria['Veterinaria']['id']),
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
	'format' => 'Página {:page} de {:pages}, viendo {:current} Veterinarias de un total de {:count}, iniciando en el registro {:start}, cabando en {:end}'
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
