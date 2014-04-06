<?php
/**
 * proteccion-canina
 * Vista:  Users Editar
 */



#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Users Editar');
$this->Html->meta('description', 'Users Editar', array('inline' => false));

#Menu activo
$this->set('menu_activo', 'Inicio');

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-users.editar.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-users.editar.js',
#	),
#		array('inline' => false)
#);
?>
<div class="row-fluid">

<div class="actions col-md-2 well sidebar-nav">
	<h3>Acciones</h3>
	<ul class="nav nav-list">
		<li>
			<?php echo $this->Html->link('<i class="icon-home"></i> Listar users', array('action' => 'index'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->Html->link('<i class="icon-plus"></i> Agregar un user', array('action' => 'agregar'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->BtForm->postLink('<i class="icon-remove"></i> Borrar este user', array('action' => 'borrar', $this->BtForm->value('User.id')), array('escape' => false), 'Estas seguro de querer borrar el registro # %s?', $this->BtForm->value('User.id')); ?>
		</li>
		<li class='divider'></li>
		<li class='nav-header'>Adopciones</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Adopciones', array('controller' => 'adopciones', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Adopcion', array('controller' => 'adopciones', 'action' => 'agregar'), array('escape' => false)); ?> </li>
		<li class='divider'></li>
		<li class='nav-header'>Extraviados</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Extraviados', array('controller' => 'extraviados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Extraviado', array('controller' => 'extraviados', 'action' => 'agregar'), array('escape' => false)); ?> </li>
		<li class='divider'></li>
		<li class='nav-header'>Perros</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Perros', array('controller' => 'perros', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Perro', array('controller' => 'perros', 'action' => 'agregar'), array('escape' => false)); ?> </li>
		<li class='divider'></li>
		<li class='nav-header'>Votos</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Votos', array('controller' => 'votos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Voto', array('controller' => 'votos', 'action' => 'agregar'), array('escape' => false)); ?> </li>
	</ul>
</div>

<div class="users form col-md-9">
<?php echo $this->BtForm->create('User', array('class' => 'well')); ?>
	<fieldset>
		<legend>Editar User</legend>
	<?php
		echo $this->BtForm->input('id', array('placeholder'=>'id'));
		echo $this->BtForm->input('num_telefonico', array('placeholder'=>'num_telefonico'));
		echo $this->BtForm->input('nombre', array('placeholder'=>'nombre'));
		echo $this->BtForm->input('domicilio', array('placeholder'=>'domicilio'));
		echo $this->BtForm->input('direccion', array('placeholder'=>'direccion'));
		echo $this->BtForm->input('username', array('placeholder'=>'username'));
		echo $this->BtForm->input('password', array('placeholder'=>'password'));
		echo $this->BtForm->input('fecha_nacimiento', array('placeholder'=>'fecha_nacimiento'));
		echo $this->BtForm->input('ultimo_login', array('placeholder'=>'ultimo_login'));
		echo $this->BtForm->input('email', array('placeholder'=>'email'));
	?>
	</fieldset>
<?php echo $this->BtForm->end('Enviar'); ?>
</div>
</div>

