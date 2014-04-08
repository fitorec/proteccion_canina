<?php
/**
 * proteccion-canina
 * Vista:  Veterinarias Ver
 */



#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Veterinarias Ver');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', 'Veterinarias Ver', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-veterinarias.ver.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-veterinarias.ver.js',
#	),
#		array('inline' => false)
#);
?>
<div class="row-fluid">
	<div class="actions col-md-2 well sidebar-nav">
	<h3>Acciones</h3>
	<ul class="nav nav-list">
		<li><?php
			/* Botón de Inicio proteccion-canina */
			echo $this->Html->link('<i class="icon-home"></i> Inicio proteccion-canina',
			'/',
			array('escape' => false)
			); ?>
			</li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-home"></i> Inicio Veterinarias',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>


		<li class='divider'></li>
		<li class='nav-header'>Posiciones</li>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-list"></i> Lista de Posiciones',
			array('controller' => 'posiciones', 'action' => 'index'),
			array('escape' => false)
		);
		?> </li>
			<li class='divider'></li>
			<li class='nav-header'>
				<i class="icon-share"></i> Compartir
			</li>
		<li><?php
		echo $this->QrCode->url(
			'/veterinarias/ver', array('size' => '170x170', 'margin' => 0)
		);
		?></li>
	</ul>
</div>

<div class="veterinarias view col-md-9">

<div class="widget">
	<div class="widget-header">
		<i class="icon-th-large"></i>
		<h3>Veterinaria</h3>
	</div>
<div class="widget-content">
<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<th><?php echo __('Id'); ?></th>
			<td>
			<?php echo h($veterinaria['Veterinaria']['id']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Nombre'); ?></th>
			<td>
			<?php echo h($veterinaria['Veterinaria']['nombre']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Direccion'); ?></th>
			<td>
			<?php echo h($veterinaria['Veterinaria']['direccion']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Posicion'); ?></th>
			<td>
			<?php echo $this->Html->link($veterinaria['Posicion']['lat'], array('controller' => 'posiciones', 'action' => 'ver', $veterinaria['Posicion']['id'])); ?>
			</td>
		</tr>
		<tr>
			<th><?php echo __('Contacto'); ?></th>
			<td>
			<?php echo h($veterinaria['Veterinaria']['contacto']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Telefono'); ?></th>
			<td>
			<?php echo h($veterinaria['Veterinaria']['telefono']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Direccion Web'); ?></th>
			<td>
			<?php echo h($veterinaria['Veterinaria']['direccion_web']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Email'); ?></th>
			<td>
			<?php echo h($veterinaria['Veterinaria']['email']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Created'); ?></th>
			<td>
			<?php echo h($veterinaria['Veterinaria']['created']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Modified'); ?></th>
			<td>
			<?php echo h($veterinaria['Veterinaria']['modified']); ?>
		</td>
		</tr>	</tbody>
</table>
</div>
</div> <!-- end widget -->
	
<div class="btn-group">
	<a href="#" class="btn btn-primary"><i class="icon-cog icon-white"></i> Acciones</a>
	<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li><?php
		echo $this->Html->link(
			'<i class="icon-pencil"></i> Editar',
			array('action' => 'editar', $veterinaria['Veterinaria']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar',
			array('action' => 'borrar', $veterinaria['Veterinaria']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Lista Veterinarias',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
	</ul>
</div>


</div>
</div>
