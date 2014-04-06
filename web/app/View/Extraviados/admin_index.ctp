<?php
/**
 * proteccion-canina
 * Vista:  Extraviados Index
 */
#iniciando la autenticación
$this->Html->initAuth($userAuth);

#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Extraviados Index');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', 'Extraviados Index', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-extraviados.index.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-extraviados.index.js',
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

<div class="extraviados index col-md-9">
	<div class="stacked widget widget-table">
		<div class="widget-header">
			<span class="icon-list-alt"></span>
			<h3>Lista de extraviados</h3>
		</div>
	<div class="widget-content">
	<table class="table table-bordered table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('user_id', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('perro_id', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('posicion_id', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('lugar', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('fecha', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('contacto', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('estado', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('created', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th><?php echo $this->Paginator->sort('modified', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?></th>
			<th class="actions">Acciones</th>
	</tr>
	</thead>
	<tbody>
	
	<?php
		foreach ($extraviados as $extraviado): ?>
		<tr>
		<td>
			<?php echo $this->Html->link(
			$extraviado['Extraviado']['id'],
			array('action' => 'ver', $extraviado['Extraviado']['id'])
			); ?>
		</td>
		<td>
			<?php echo $this->Html->link(
			$extraviado['User']['username'],
			array('controller' => 'users', 'action' => 'ver', $extraviado['User']['id'])
			);
			?>
		</td>
		<td>
			<?php echo $this->Html->link(
			$extraviado['Perro']['raza'],
			array('controller' => 'perros', 'action' => 'ver', $extraviado['Perro']['id'])
			);
			?>
		</td>
		<td>
			<?php echo $this->Html->link(
			$extraviado['Posicion']['lat'],
			array('controller' => 'posiciones', 'action' => 'ver', $extraviado['Posicion']['id'])
			);
			?>
		</td>
		<td>
			<?php echo h($extraviado['Extraviado']['lugar']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($extraviado['Extraviado']['fecha']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($extraviado['Extraviado']['contacto']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($extraviado['Extraviado']['estado']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($extraviado['Extraviado']['created']); ?>&nbsp;
		</td>
		<td>
			<?php echo h($extraviado['Extraviado']['modified']); ?>&nbsp;
		</td>
		<td class="actions"><div class="btn-group">
	<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li>
	<?php 
		echo $this->Html->link(
		'<i class="icon-eye-open"></i> Ver',
		array('action' => 'ver', $extraviado['Extraviado']['id']),
		array('escape' => false)
	); ?>
		</li>
		<li>
	<?php 
		echo $this->Html->link(
		'<i class="icon-pencil"></i> Editar',
		array('action' => 'editar', $extraviado['Extraviado']['id']),
		array('escape' => false)
	); ?>
		</li>
		<li>
	<?php 
		echo $this->Form->postLink(
		'<i class="icon-trash"></i> Borrar',
		array('action' => 'borrar', $extraviado['Extraviado']['id']),
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
	'format' => 'Página {:page} de {:pages}, viendo {:current} Extraviados de un total de {:count}, iniciando en el registro {:start}, cabando en {:end}'
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
