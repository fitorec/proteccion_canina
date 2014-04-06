<?php
/**
 * proteccion-canina
 * Vista:  Posiciones Ver
 */

#iniciando la autenticación
$this->Html->initAuth($userAuth);

#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Posiciones Ver');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', 'Posiciones Ver', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-posiciones.ver.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-posiciones.ver.js',
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
			'<i class="icon-home"></i> Inicio Posiciones',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
<?php
		/* Editar Posicion */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
				<li><?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Posicion',
			array('action' => 'Agregar'),
			array('escape' => false)
		); ?></li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-pencil"></i> Editar Posicion',
			array('action' => 'editar', $posicion['Posicion']['id']),
			array('escape' => false)
		); ?>
		</li>


	<?php endif; ?>
<?php
	/* Editar Posicion */
	if($userAuth['role'] == 'Administrativo') : ?>
			<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar Posicion',
			array('action' => 'borrar', $posicion['Posicion']['id']),
			array('escape' => false),
			'Esta seguro de querer borrar el registro ' . $posicion['Posicion']['id']
		); ?>
		</li>

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
		<li class='nav-header'>Paseos</li>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-list"></i> Lista de Paseos',
			array('controller' => 'paseos', 'action' => 'index'),
			array('escape' => false)
		);
		?> </li>
	<?php
	/* Agregar */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Paseo',
			array('controller' => 'paseos', 'action' => 'agregar'),
			array('escape' => false)
		);
		?> </li>
	<?php endif; ?>
		<li class='divider'></li>
		<li class='nav-header'>Veterinarias</li>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-list"></i> Lista de Veterinarias',
			array('controller' => 'veterinarias', 'action' => 'index'),
			array('escape' => false)
		);
		?> </li>
	<?php
	/* Agregar */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Veterinaria',
			array('controller' => 'veterinarias', 'action' => 'agregar'),
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
			'/posiciones/ver', array('size' => '170x170', 'margin' => 0)
		);
		?></li>
	</ul>
</div>

<div class="posiciones view col-md-9">

<div class="widget">
	<div class="widget-header">
		<i class="icon-th-large"></i>
		<h3>Posicion</h3>
	</div>
<div class="widget-content">
<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<th><?php echo __('Id'); ?></th>
			<td>
			<?php echo h($posicion['Posicion']['id']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Lat'); ?></th>
			<td>
			<?php echo h($posicion['Posicion']['lat']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Long'); ?></th>
			<td>
			<?php echo h($posicion['Posicion']['long']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Created'); ?></th>
			<td>
			<?php echo h($posicion['Posicion']['created']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Modified'); ?></th>
			<td>
			<?php echo h($posicion['Posicion']['modified']); ?>
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
			array('action' => 'editar', $posicion['Posicion']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar',
			array('action' => 'borrar', $posicion['Posicion']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Lista Posiciones',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
	</ul>
</div>


</div>
</div>
