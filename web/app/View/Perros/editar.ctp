<?php
/**
 * proteccion-canina
 * Vista:  Perros Editar
 */

#iniciando la autenticación
$this->Html->initAuth($userAuth);

#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Perros Editar');
$this->Html->meta('description', 'Perros Editar', array('inline' => false));

#Menu activo
$this->set('menu_activo', 'Inicio');

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-perros.editar.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-perros.editar.js',
#	),
#		array('inline' => false)
#);
?>
<div class="row-fluid">

<div class="actions col-md-2 well sidebar-nav">
	<h3>Acciones</h3>
	<ul class="nav nav-list">
		<li>
			<?php echo $this->Html->link('<i class="icon-home"></i> Listar perros', array('action' => 'index'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->Html->link('<i class="icon-plus"></i> Agregar un perro', array('action' => 'agregar'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->BtForm->postLink('<i class="icon-remove"></i> Borrar este perro', array('action' => 'borrar', $this->BtForm->value('Perro.id')), array('escape' => false), 'Estas seguro de querer borrar el registro # %s?', $this->BtForm->value('Perro.id')); ?>
		</li>
		<li class='divider'></li>
		<li class='nav-header'>Users</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Users', array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar User', array('controller' => 'users', 'action' => 'agregar'), array('escape' => false)); ?> </li>
		<li class='divider'></li>
		<li class='nav-header'>Adopciones</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Adopciones', array('controller' => 'adopciones', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Adopcion', array('controller' => 'adopciones', 'action' => 'agregar'), array('escape' => false)); ?> </li>
		<li class='divider'></li>
		<li class='nav-header'>Extraviados</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Extraviados', array('controller' => 'extraviados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Extraviado', array('controller' => 'extraviados', 'action' => 'agregar'), array('escape' => false)); ?> </li>
		<li class='divider'></li>
		<li class='nav-header'>Vacunas</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Vacunas', array('controller' => 'vacunas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Vacuna', array('controller' => 'vacunas', 'action' => 'agregar'), array('escape' => false)); ?> </li>
	</ul>
</div>

<div class="perros form col-md-9">
<?php echo $this->BtForm->create('Perro', array('class' => 'well')); ?>
	<fieldset>
		<legend>Editar Perro</legend>
	<?php
		echo $this->BtForm->input('id', array('placeholder'=>'id'));
		echo $this->BtForm->input('user_id', array('placeholder'=>'user_id'));
		echo $this->BtForm->input('estado', array('placeholder'=>'estado'));
		echo $this->BtForm->input('raza', array('placeholder'=>'raza'));
		echo $this->BtForm->input('fecha_nacimiento', array('placeholder'=>'fecha_nacimiento'));
		echo $this->BtForm->input('color', array('placeholder'=>'color'));
		echo $this->BtForm->input('peso', array('placeholder'=>'peso'));
		echo $this->BtForm->input('tamanio', array('placeholder'=>'tamanio'));
		echo $this->BtForm->input('Vacuna');
	?>
	</fieldset>
<?php echo $this->BtForm->end('Enviar'); ?>
</div>
</div>

