<?php
/**
 * proteccion-canina
 * Vista:  Extraviados Ver
 */

#iniciando la autenticación
$this->Html->initAuth($userAuth);

#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Extraviados Ver');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', 'Extraviados Ver', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-extraviados.ver.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-extraviados.ver.js',
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
			'<i class="icon-home"></i> Inicio Extraviados',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
<?php
		/* Editar Extraviado */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
				<li><?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Extraviado',
			array('action' => 'Agregar'),
			array('escape' => false)
		); ?></li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-pencil"></i> Editar Extraviado',
			array('action' => 'editar', $extraviado['Extraviado']['id']),
			array('escape' => false)
		); ?>
		</li>


	<?php endif; ?>
<?php
	/* Editar Extraviado */
	if($userAuth['role'] == 'Administrativo') : ?>
			<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar Extraviado',
			array('action' => 'borrar', $extraviado['Extraviado']['id']),
			array('escape' => false),
			'Esta seguro de querer borrar el registro ' . $extraviado['Extraviado']['id']
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
	<?php endif; ?>
		<li class='divider'></li>
		<li class='nav-header'>Posiciones</li>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-list"></i> Lista de Posiciones',
			array('controller' => 'posiciones', 'action' => 'index'),
			array('escape' => false)
		);
		?> </li>
	<?php
	/* Agregar */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Posicion',
			array('controller' => 'posiciones', 'action' => 'agregar'),
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
			'/extraviados/ver', array('size' => '170x170', 'margin' => 0)
		);
		?></li>
	</ul>
</div>

<div class="extraviados view col-md-9">

<div class="widget">
	<div class="widget-header">
		<i class="icon-th-large"></i>
		<h3>Extraviado</h3>
	</div>
<div class="widget-content">
<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<th><?php echo __('Id'); ?></th>
			<td>
			<?php echo h($extraviado['Extraviado']['id']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('User'); ?></th>
			<td>
			<?php echo $this->Html->link($extraviado['User']['username'], array('controller' => 'users', 'action' => 'ver', $extraviado['User']['id'])); ?>
			</td>
		</tr>
		<tr>
			<th><?php echo __('Perro'); ?></th>
			<td>
			<?php echo $this->Html->link($extraviado['Perro']['raza'], array('controller' => 'perros', 'action' => 'ver', $extraviado['Perro']['id'])); ?>
			</td>
		</tr>
		<tr>
			<th><?php echo __('Posicion'); ?></th>
			<td>
			<?php echo $this->Html->link($extraviado['Posicion']['lat'], array('controller' => 'posiciones', 'action' => 'ver', $extraviado['Posicion']['id'])); ?>
			</td>
		</tr>
		<tr>
			<th><?php echo __('Lugar'); ?></th>
			<td>
			<?php echo h($extraviado['Extraviado']['lugar']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Fecha'); ?></th>
			<td>
			<?php echo h($extraviado['Extraviado']['fecha']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Contacto'); ?></th>
			<td>
			<?php echo h($extraviado['Extraviado']['contacto']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Estado'); ?></th>
			<td>
			<?php echo h($extraviado['Extraviado']['estado']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Created'); ?></th>
			<td>
			<?php echo h($extraviado['Extraviado']['created']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Modified'); ?></th>
			<td>
			<?php echo h($extraviado['Extraviado']['modified']); ?>
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
			array('action' => 'editar', $extraviado['Extraviado']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar',
			array('action' => 'borrar', $extraviado['Extraviado']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Lista Extraviados',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
	</ul>
</div>


</div>
</div>
