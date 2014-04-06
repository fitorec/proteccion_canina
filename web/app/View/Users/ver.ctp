<?php
/**
 * proteccion-canina
 * Vista:  Users Ver
 */

#iniciando la autenticación
$this->Html->initAuth($userAuth);

#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Users Ver');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', 'Users Ver', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-users.ver.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-users.ver.js',
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
			'<i class="icon-home"></i> Inicio Users',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
<?php
		/* Editar User */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
				<li><?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar User',
			array('action' => 'Agregar'),
			array('escape' => false)
		); ?></li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-pencil"></i> Editar User',
			array('action' => 'editar', $user['User']['id']),
			array('escape' => false)
		); ?>
		</li>


	<?php endif; ?>
<?php
	/* Editar User */
	if($userAuth['role'] == 'Administrativo') : ?>
			<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar User',
			array('action' => 'borrar', $user['User']['id']),
			array('escape' => false),
			'Esta seguro de querer borrar el registro ' . $user['User']['id']
		); ?>
		</li>

	<?php endif; ?>

		<li class='divider'></li>
		<li class='nav-header'>Adopciones</li>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-list"></i> Lista de Adopciones',
			array('controller' => 'adopciones', 'action' => 'index'),
			array('escape' => false)
		);
		?> </li>
	<?php
	/* Agregar */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Adopcion',
			array('controller' => 'adopciones', 'action' => 'agregar'),
			array('escape' => false)
		);
		?> </li>
	<?php endif; ?>
		<li class='divider'></li>
		<li class='nav-header'>Extraviados</li>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-list"></i> Lista de Extraviados',
			array('controller' => 'extraviados', 'action' => 'index'),
			array('escape' => false)
		);
		?> </li>
	<?php
	/* Agregar */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Extraviado',
			array('controller' => 'extraviados', 'action' => 'agregar'),
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
		<li class='nav-header'>Votos</li>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-list"></i> Lista de Votos',
			array('controller' => 'votos', 'action' => 'index'),
			array('escape' => false)
		);
		?> </li>
	<?php
	/* Agregar */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Voto',
			array('controller' => 'votos', 'action' => 'agregar'),
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
			'/users/ver', array('size' => '170x170', 'margin' => 0)
		);
		?></li>
	</ul>
</div>

<div class="users view col-md-9">

<div class="widget">
	<div class="widget-header">
		<i class="icon-th-large"></i>
		<h3>User</h3>
	</div>
<div class="widget-content">
<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<th><?php echo __('Id'); ?></th>
			<td>
			<?php echo h($user['User']['id']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Num Telefonico'); ?></th>
			<td>
			<?php echo h($user['User']['num_telefonico']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Nombre'); ?></th>
			<td>
			<?php echo h($user['User']['nombre']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Domicilio'); ?></th>
			<td>
			<?php echo h($user['User']['domicilio']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Direccion'); ?></th>
			<td>
			<?php echo h($user['User']['direccion']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Username'); ?></th>
			<td>
			<?php echo h($user['User']['username']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Password'); ?></th>
			<td>
			<?php echo h($user['User']['password']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Fecha Nacimiento'); ?></th>
			<td>
			<?php echo h($user['User']['fecha_nacimiento']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Ultimo Login'); ?></th>
			<td>
			<?php echo h($user['User']['ultimo_login']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Email'); ?></th>
			<td>
			<?php echo h($user['User']['email']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Created'); ?></th>
			<td>
			<?php echo h($user['User']['created']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Modified'); ?></th>
			<td>
			<?php echo h($user['User']['modified']); ?>
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
			array('action' => 'editar', $user['User']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar',
			array('action' => 'borrar', $user['User']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Lista Users',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
	</ul>
</div>


</div>
</div>
