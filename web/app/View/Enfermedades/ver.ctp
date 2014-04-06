<?php
/**
 * proteccion-canina
 * Vista:  Enfermedades Ver
 */


#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Enfermedades Ver');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', 'Enfermedades Ver', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-enfermedades.ver.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-enfermedades.ver.js',
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
			'<i class="icon-home"></i> Inicio Enfermedades',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
<?php
		/* Editar Enfermedad */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
				<li><?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Enfermedad',
			array('action' => 'Agregar'),
			array('escape' => false)
		); ?></li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-pencil"></i> Editar Enfermedad',
			array('action' => 'editar', $enfermedad['Enfermedad']['id']),
			array('escape' => false)
		); ?>
		</li>


	<?php endif; ?>
<?php
	/* Editar Enfermedad */
	if($userAuth['role'] == 'Administrativo') : ?>
			<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar Enfermedad',
			array('action' => 'borrar', $enfermedad['Enfermedad']['id']),
			array('escape' => false),
			'Esta seguro de querer borrar el registro ' . $enfermedad['Enfermedad']['id']
		); ?>
		</li>

	<?php endif; ?>

		<li class='divider'></li>
		<li class='nav-header'>Vacunas</li>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-list"></i> Lista de Vacunas',
			array('controller' => 'vacunas', 'action' => 'index'),
			array('escape' => false)
		);
		?> </li>
	<?php
	/* Agregar */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Vacuna',
			array('controller' => 'vacunas', 'action' => 'agregar'),
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
			'/enfermedades/ver', array('size' => '170x170', 'margin' => 0)
		);
		?></li>
	</ul>
</div>

<div class="enfermedades view col-md-9">

<div class="widget">
	<div class="widget-header">
		<i class="icon-th-large"></i>
		<h3>Enfermedad</h3>
	</div>
<div class="widget-content">
<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<th><?php echo __('Id'); ?></th>
			<td>
			<?php echo h($enfermedad['Enfermedad']['id']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Vacuna'); ?></th>
			<td>
			<?php echo $this->Html->link($enfermedad['Vacuna']['id'], array('controller' => 'vacunas', 'action' => 'ver', $enfermedad['Vacuna']['id'])); ?>
			</td>
		</tr>
		<tr>
			<th><?php echo __('Nombre'); ?></th>
			<td>
			<?php echo h($enfermedad['Enfermedad']['nombre']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Descripcion'); ?></th>
			<td>
			<?php echo h($enfermedad['Enfermedad']['descripcion']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Created'); ?></th>
			<td>
			<?php echo h($enfermedad['Enfermedad']['created']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Modified'); ?></th>
			<td>
			<?php echo h($enfermedad['Enfermedad']['modified']); ?>
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
			array('action' => 'editar', $enfermedad['Enfermedad']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar',
			array('action' => 'borrar', $enfermedad['Enfermedad']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Lista Enfermedades',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
	</ul>
</div>


</div>
</div>
