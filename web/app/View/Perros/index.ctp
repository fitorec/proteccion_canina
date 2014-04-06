<?php
/**
 * proteccion-canina
 * Vista:  Perros Index
 */
#iniciando la autenticación
$this->Html->initAuth($userAuth);

#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Perros Index');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', 'Perros Index', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-perros.index.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-perros.index.js',
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
				Users
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Listar',
			array('controller' => 'users', 'action' => 'index'),
			array('escape' => false)
		); ?>
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar',
			array('controller' => 'users', 'action' => 'agregar'),
			array('escape' => false)
		); ?>
			</li>
			<li class='divider'></li>
			<li class='nav-header'>
				Adopciones
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Listar',
			array('controller' => 'adopciones', 'action' => 'index'),
			array('escape' => false)
		); ?>
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar',
			array('controller' => 'adopciones', 'action' => 'agregar'),
			array('escape' => false)
		); ?>
			</li>
			<li class='divider'></li>
			<li class='nav-header'>
				Extraviados
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Listar',
			array('controller' => 'extraviados', 'action' => 'index'),
			array('escape' => false)
		); ?>
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar',
			array('controller' => 'extraviados', 'action' => 'agregar'),
			array('escape' => false)
		); ?>
			</li>
			<li class='divider'></li>
			<li class='nav-header'>
				Vacunas
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Listar',
			array('controller' => 'vacunas', 'action' => 'index'),
			array('escape' => false)
		); ?>
			</li>
			<li>
	<?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar',
			array('controller' => 'vacunas', 'action' => 'agregar'),
			array('escape' => false)
		); ?>
			</li>
	</ul>
</div>

<div class="perros index col-md-9">
	<div class="stacked widget widget-table">
		<div class="widget-header">
			<span class="icon-list-alt"></span>
			<h3>Lista de perros</h3>
		</div>
	<div class="widget-content">
	<table class="table table-bordered table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('user_id', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('estado', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('raza', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('color', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('peso', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('tamanio', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('created', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('modified', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th class="actions">Acciones</th>
	</tr>
	</thead>
	<tbody>
	
	<?php
		foreach ($perros as $perro): ?>
		<tr>
		<td>
			<?php echo $this->Html->link(
			$perro['Perro']['id'],
			array('action' => 'ver', $perro['Perro']['id'])
			); ?>
		</td>
		<td>
			<?php echo $this->Html->link(
			$perro['User']['username'],
			array('controller' => 'users', 'action' => 'ver', $perro['User']['id'])
			);
			?>
		</td>
		<td>
			<?php echo h($perro['Perro']['estado']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($perro['Perro']['raza']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($perro['Perro']['fecha_nacimiento']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($perro['Perro']['color']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($perro['Perro']['peso']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($perro['Perro']['tamanio']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($perro['Perro']['created']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($perro['Perro']['modified']); ?>&nbsp;
		</td>
		<td class="actions"><div class="btn-group">
	<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li>
	<?php 
		echo $this->Html->link(
		'<i class="icon-eye-open"></i> Ver',
		array('action' => 'ver', $perro['Perro']['id']),
		array('escape' => false)
	); ?>
		</li>
		<li>
	<?php 
		echo $this->Html->link(
		'<i class="icon-pencil"></i> Editar',
		array('action' => 'editar', $perro['Perro']['id']),
		array('escape' => false)
	); ?>
		</li>
		<li>
	<?php 
		echo $this->Form->postLink(
		'<i class="icon-trash"></i> Borrar',
		array('action' => 'borrar', $perro['Perro']['id']),
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
	'format' => 'Página {:page} de {:pages}, viendo {:current} Perros de un total de {:count}, iniciando en el registro {:start}, cabando en {:end}'
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
