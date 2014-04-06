<?php
/**
 * proteccion-canina
 * Vista:  Perros Ver
 */

#iniciando la autenticación
$this->Html->initAuth($userAuth);

#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Perros Ver');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', 'Perros Ver', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-perros.ver.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-perros.ver.js',
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
			'<i class="icon-home"></i> Inicio Perros',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
<?php
		/* Editar Perro */
	if(in_array($userAuth['role'], array('Administrativo', 'Profesor'))) : ?>
				<li><?php
		echo $this->Html->link(
			'<i class="icon-plus"></i> Agregar Perro',
			array('action' => 'Agregar'),
			array('escape' => false)
		); ?></li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-pencil"></i> Editar Perro',
			array('action' => 'editar', $perro['Perro']['id']),
			array('escape' => false)
		); ?>
		</li>


	<?php endif; ?>
<?php
	/* Editar Perro */
	if($userAuth['role'] == 'Administrativo') : ?>
			<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar Perro',
			array('action' => 'borrar', $perro['Perro']['id']),
			array('escape' => false),
			'Esta seguro de querer borrar el registro ' . $perro['Perro']['id']
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
			'/perros/ver', array('size' => '170x170', 'margin' => 0)
		);
		?></li>
	</ul>
</div>

<div class="perros view col-md-9">

<div class="widget">
	<div class="widget-header">
		<i class="icon-th-large"></i>
		<h3>Perro</h3>
	</div>
<div class="widget-content">
<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<th><?php echo __('Id'); ?></th>
			<td>
			<?php echo h($perro['Perro']['id']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('User'); ?></th>
			<td>
			<?php echo $this->Html->link($perro['User']['username'], array('controller' => 'users', 'action' => 'ver', $perro['User']['id'])); ?>
			</td>
		</tr>
		<tr>
			<th><?php echo __('Estado'); ?></th>
			<td>
			<?php echo h($perro['Perro']['estado']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Raza'); ?></th>
			<td>
			<?php echo h($perro['Perro']['raza']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Fecha Nacimiento'); ?></th>
			<td>
			<?php echo h($perro['Perro']['fecha_nacimiento']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Color'); ?></th>
			<td>
			<?php echo h($perro['Perro']['color']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Peso'); ?></th>
			<td>
			<?php echo h($perro['Perro']['peso']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Tamanio'); ?></th>
			<td>
			<?php echo h($perro['Perro']['tamanio']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Created'); ?></th>
			<td>
			<?php echo h($perro['Perro']['created']); ?>
		</td>
		</tr>
		<tr>
			<th><?php echo __('Modified'); ?></th>
			<td>
			<?php echo h($perro['Perro']['modified']); ?>
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
			array('action' => 'editar', $perro['Perro']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar',
			array('action' => 'borrar', $perro['Perro']['id']),
			array('escape' => false)
		); ?>
		</li>
		<li><?php
		echo $this->Html->link(
			'<i class="icon-list"></i> Lista Perros',
			array('action' => 'index'),
			array('escape' => false)
		); ?>
		</li>
	</ul>
</div>

<div class="related">
	<h3>Vacunas Relacionados</h3>
	<?php if (!empty($perro['Vacuna'])): ?>
	<table class="table table-bordered table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions">Acciones</th>
	</tr>
	<?php
		$i = 0;
		foreach ($perro['Vacuna'] as $vacuna): ?>
		<tr>
			<td><?php echo $vacuna['id']; ?></td>
			<td><?php echo $vacuna['nombre']; ?></td>
			<td><?php echo $vacuna['descripcion']; ?></td>
			<td><?php echo $vacuna['created']; ?></td>
			<td><?php echo $vacuna['modified']; ?></td>
			<td class="actions">
	<div class="btn-group">
	<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li>
		<?php
		echo $this->Html->link(
			'<i class="icon-eye-open"></i> Ver',
			array('controller' => 'vacunas', 'action' => 'ver', $vacuna['id']),
			array('escape' => false)
		); ?>
		</li>
		<li>
		<?php
		echo $this->Html->link(
			'<i class="icon-pencil"></i> Editar',
			array('controller' => 'vacunas', 'action' => 'editar', $vacuna['id']),
			array('escape' => false)
		); ?>
			</li>
		<li>
		<?php
		echo $this->Form->postLink(
			'<i class="icon-trash"></i> Borrar',
			array('controller' => 'vacunas', 'action' => 'borrar', $vacuna['id']),
			array('escape' => false),
			"Estas seguro de borrar el registro # {$vacuna['id']}?"
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
			'Nuevo Vacuna',
			array('controller' => 'vacunas', 'action' => 'agregar'),
			array('class' => 'btn btn-info')
		); ?>
		</div>
</div>

</div>
</div>
