<?php
/**
 * proteccion-canina
 * Vista:  Vacunas Ver
 */


#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Vacunas Ver');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', 'Vacunas Ver', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-vacunas.ver.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-vacunas.ver.js',
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
			'<i class="icon-home"></i> Inicio Vacunas',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
<?php
		/* Editar Vacuna */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
				<li><?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Vacuna',
			array('action' => 'Agregar'),
			array('escape' => false)
		); ?></li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-pencil"></i> Editar Vacuna',
			array('action' => 'editar', $vacuna['Vacuna']['id']),
			array('escape' => false)
		); ?>
		</li>


	<?php endif; ?>
<?php
	/* Editar Vacuna */
	if($userAuth['role'] == 'Administrativo') : ?>
			<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar Vacuna',
			array('action' => 'borrar', $vacuna['Vacuna']['id']),
			array('escape' => false),
			'Esta seguro de querer borrar el registro ' . $vacuna['Vacuna']['id']
		); ?>
		</li>

	<?php endif; ?>

		<li class='divider'></li>
		<li class='nav-header'>Enfermedades</li>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-list"></i> Lista de Enfermedades',
			array('controller' => 'enfermedades', 'action' => 'index'),
			array('escape' => false)
		);
		?> </li>
	<?php
	/* Agregar */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
		<li><?php
			echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Enfermedad',
			array('controller' => 'enfermedades', 'action' => 'agregar'),
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
			'/vacunas/ver', array('size' => '170x170', 'margin' => 0)
		);
		?></li>
	</ul>
</div>

<div class="vacunas view col-md-9">

<div class="widget">
	<div class="widget-header">
		<i class="icon-th-large"></i>
		<h3>Vacuna</h3>
	</div>
<div class="widget-content">
<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<th><?php echo __('Id'); ?></th>
			<td>
			<?php echo h($vacuna['Vacuna']['id']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Nombre'); ?></th>
			<td>
			<?php echo h($vacuna['Vacuna']['nombre']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Descripcion'); ?></th>
			<td>
			<?php echo h($vacuna['Vacuna']['descripcion']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Created'); ?></th>
			<td>
			<?php echo h($vacuna['Vacuna']['created']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Modified'); ?></th>
			<td>
			<?php echo h($vacuna['Vacuna']['modified']); ?>
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
			array('action' => 'editar', $vacuna['Vacuna']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar',
			array('action' => 'borrar', $vacuna['Vacuna']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Lista Vacunas',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
	</ul>
</div>

<div class="related">
	<h3>Perros Relacionados</h3>
	<?php if (!empty($vacuna['Perro'])): ?>
	<table class="table table-bordered table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Raza'); ?></th>
		<th><?php echo __('Fecha Nacimiento'); ?></th>
		<th><?php echo __('Color'); ?></th>
		<th><?php echo __('Peso'); ?></th>
		<th><?php echo __('Tamanio'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions">Acciones</th>
	</tr>
	<?php
		$i = 0;
		foreach ($vacuna['Perro'] as $perro): ?>
		<tr>
			<td><?php echo $perro['id']; ?></td>
			<td><?php echo $perro['user_id']; ?></td>
			<td><?php echo $perro['estado']; ?></td>
			<td><?php echo $perro['raza']; ?></td>
			<td><?php echo $perro['fecha_nacimiento']; ?></td>
			<td><?php echo $perro['color']; ?></td>
			<td><?php echo $perro['peso']; ?></td>
			<td><?php echo $perro['tamanio']; ?></td>
			<td><?php echo $perro['created']; ?></td>
			<td><?php echo $perro['modified']; ?></td>
			<td class="actions">
	<div class="btn-group">
	<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li>
		<?php
		echo $this->Html->link(
			'<i class="icon-eye-open"></i> Ver',
			array('controller' => 'perros', 'action' => 'ver', $perro['id']),
			array('escape' => false)
		); ?>
		</li>
		<li>
		<?php
		echo $this->Html->link(
			'<i class="icon-pencil"></i> Editar',
			array('controller' => 'perros', 'action' => 'editar', $perro['id']),
			array('escape' => false)
		); ?>
			</li>
		<li>
		<?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar',
			array('controller' => 'perros', 'action' => 'borrar', $perro['id']),
			array('escape' => false),
			"Estas seguro de borrar el registro # {$perro['id']}?"
		); ?>
		</li>
	</ul>
	</div>
	</td>
</tr>

	<?php endforeach; ?>
		</table>
<?php endif; ?>
			<div class="actions"><?php
		echo $this->Html->link(
			'Nuevo Perro',
			array('controller' => 'perros', 'action' => 'agregar'),
			array('class' => 'btn btn-info')
		); ?>
		</div>
</div>

</div>
</div>
