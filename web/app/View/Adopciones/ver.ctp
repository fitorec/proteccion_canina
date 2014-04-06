<?php
/**
 * proteccion-canina
 * Vista:  Adopciones Ver
 */



#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Adopciones Ver');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', 'Adopciones Ver', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-adopciones.ver.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-adopciones.ver.js',
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
			'<i class="icon-home"></i> Inicio Adopciones',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
<?php
		/* Editar Adopcion */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
				<li><?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Adopcion',
			array('action' => 'Agregar'),
			array('escape' => false)
		); ?></li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-pencil"></i> Editar Adopcion',
			array('action' => 'editar', $adopcion['Adopcion']['id']),
			array('escape' => false)
		); ?>
		</li>


	<?php endif; ?>
<?php
	/* Editar Adopcion */
	if($userAuth['role'] == 'Administrativo') : ?>
			<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar Adopcion',
			array('action' => 'borrar', $adopcion['Adopcion']['id']),
			array('escape' => false),
			'Esta seguro de querer borrar el registro ' . $adopcion['Adopcion']['id']
		); ?>
		</li>

	<?php endif; ?>

		<li class='divider'></li>
		<li class='nav-header'>Users</li>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-list"></i> Lista de Users',
			array('controller' => 'users', 'action' => 'index'),
			array('escape' => false)
		);
		?> </li>
	<?php
	/* Agregar */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar User',
			array('controller' => 'users', 'action' => 'agregar'),
			array('escape' => false)
		);
		?> </li>
	<?php endif; ?>
		<li class='divider'></li>
		<li class='nav-header'>Perros</li>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-list"></i> Lista de Perros',
			array('controller' => 'perros', 'action' => 'index'),
			array('escape' => false)
		);
		?> </li>
	<?php
	/* Agregar */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Perro',
			array('controller' => 'perros', 'action' => 'agregar'),
			array('escape' => false)
		);
		?> </li>
	<?php endif; ?>	<!-- Compartir sección -->
			<li class='divider'></li>
			<li class='nav-header'>
				<i class="icon-share"></i> Compartir
			</li>
		<li><?php
		echo $this->QrCode->url(
			'/adopciones/ver', array('size' => '170x170', 'margin' => 0)
		);
		?></li>
	</ul>
</div>

<div class="adopciones view col-md-9">

<div class="widget">
	<div class="widget-header">
		<i class="icon-th-large"></i>
		<h3>Adopcion</h3>
	</div>
<div class="widget-content">
<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<th><?php echo __('Id'); ?></th>
			<td>
			<?php echo h($adopcion['Adopcion']['id']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('User'); ?></th>
			<td>
			<?php echo $this->Html->link($adopcion['User']['id'], array('controller' => 'users', 'action' => 'ver', $adopcion['User']['id'])); ?>
			</td>
		</tr>
		<tr>
			<th><?php echo __('Usuario Quien Dio En Adopcion'); ?></th>
			<td>
			<?php echo h($adopcion['Adopcion']['usuario_quien_dio_en_adopcion']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Estado'); ?></th>
			<td>
			<?php echo h($adopcion['Adopcion']['estado']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Perro'); ?></th>
			<td>
			<?php echo $this->Html->link($adopcion['Perro']['id'], array('controller' => 'perros', 'action' => 'ver', $adopcion['Perro']['id'])); ?>
			</td>
		</tr>
		<tr>
			<th><?php echo __('Created'); ?></th>
			<td>
			<?php echo h($adopcion['Adopcion']['created']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Modified'); ?></th>
			<td>
			<?php echo h($adopcion['Adopcion']['modified']); ?>
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
			array('action' => 'editar', $adopcion['Adopcion']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar',
			array('action' => 'borrar', $adopcion['Adopcion']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Lista Adopciones',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
	</ul>
</div>


</div>
</div>
