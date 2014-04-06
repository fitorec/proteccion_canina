<?php
/**
 * proteccion-canina
 * Vista:  Votos Ver
 */

#iniciando la autenticación
$this->Html->initAuth($userAuth);

#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Votos Ver');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', 'Votos Ver', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-votos.ver.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-votos.ver.js',
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
			'<i class="icon-home"></i> Inicio Votos',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
<?php
		/* Editar Voto */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
				<li><?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Voto',
			array('action' => 'Agregar'),
			array('escape' => false)
		); ?></li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-pencil"></i> Editar Voto',
			array('action' => 'editar', $voto['Voto']['id']),
			array('escape' => false)
		); ?>
		</li>


	<?php endif; ?>
<?php
	/* Editar Voto */
	if($userAuth['role'] == 'Administrativo') : ?>
			<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar Voto',
			array('action' => 'borrar', $voto['Voto']['id']),
			array('escape' => false),
			'Esta seguro de querer borrar el registro ' . $voto['Voto']['id']
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
	<?php endif; ?>	<!-- Compartir sección -->
			<li class='divider'></li>
			<li class='nav-header'>
				<i class="icon-share"></i> Compartir
			</li>
		<li><?php
		echo $this->QrCode->url(
			'/votos/ver', array('size' => '170x170', 'margin' => 0)
		);
		?></li>
	</ul>
</div>

<div class="votos view col-md-9">

<div class="widget">
	<div class="widget-header">
		<i class="icon-th-large"></i>
		<h3>Voto</h3>
	</div>
<div class="widget-content">
<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<th><?php echo __('Id'); ?></th>
			<td>
			<?php echo h($voto['Voto']['id']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('User'); ?></th>
			<td>
			<?php echo $this->Html->link($voto['User']['username'], array('controller' => 'users', 'action' => 'ver', $voto['User']['id'])); ?>
			</td>
		</tr>
		<tr>
			<th><?php echo __('Tabla Nombre'); ?></th>
			<td>
			<?php echo h($voto['Voto']['tabla_nombre']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Id Externo'); ?></th>
			<td>
			<?php echo h($voto['Voto']['id_externo']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Created'); ?></th>
			<td>
			<?php echo h($voto['Voto']['created']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Modified'); ?></th>
			<td>
			<?php echo h($voto['Voto']['modified']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Voto'); ?></th>
			<td>
			<?php echo h($voto['Voto']['voto']); ?>
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
			array('action' => 'editar', $voto['Voto']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar',
			array('action' => 'borrar', $voto['Voto']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Lista Votos',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
	</ul>
</div>


</div>
</div>
