<?php
/**
 * proteccion-canina
 * Vista:  Extraviados Editar
 */



#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Extraviados Editar');
$this->Html->meta('description', 'Extraviados Editar', array('inline' => false));

#Menu activo
$this->set('menu_activo', 'Inicio');

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-extraviados.editar.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-extraviados.editar.js',
#	),
#		array('inline' => false)
#);
?>
<div class="row-fluid">

<div class="actions col-md-2 well sidebar-nav">
	<h3>Acciones</h3>
	<ul class="nav nav-list">
		<li>
			<?php echo $this->Html->link('<i class="icon-home"></i> Listar extraviados', array('action' => 'index'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->Html->link('<i class="icon-plus"></i> Agregar un extraviado', array('action' => 'agregar'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->BtForm->postLink('<i class="icon-remove"></i> Borrar este extraviado', array('action' => 'borrar', $this->BtForm->value('Extraviado.id')), array('escape' => false), 'Estas seguro de querer borrar el registro # %s?', $this->BtForm->value('Extraviado.id')); ?>
		</li>
		<li class='divider'></li>
		<li class='nav-header'>Users</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Users', array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar User', array('controller' => 'users', 'action' => 'agregar'), array('escape' => false)); ?> </li>
		<li class='divider'></li>
		<li class='nav-header'>Perros</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Perros', array('controller' => 'perros', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Perro', array('controller' => 'perros', 'action' => 'agregar'), array('escape' => false)); ?> </li>
		<li class='divider'></li>
		<li class='nav-header'>Posiciones</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Posiciones', array('controller' => 'posiciones', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Posicion', array('controller' => 'posiciones', 'action' => 'agregar'), array('escape' => false)); ?> </li>
	</ul>
</div>

<div class="extraviados form col-md-9">
<?php echo $this->BtForm->create('Extraviado', array('class' => 'well')); ?>
	<fieldset>
		<legend>Editar Extraviado</legend>
	<?php
		echo $this->BtForm->input('id', array('placeholder'=>'id'));
		echo $this->BtForm->input('user_id', array('placeholder'=>'user_id'));
		echo $this->BtForm->input('perro_id', array('placeholder'=>'perro_id'));
		echo $this->BtForm->input('posicion_id', array('placeholder'=>'posicion_id'));
		echo $this->BtForm->input('lugar', array('placeholder'=>'lugar'));
		echo $this->BtForm->input('fecha', array('placeholder'=>'fecha'));
		echo $this->BtForm->input('contacto', array('placeholder'=>'contacto'));
		echo $this->BtForm->input('estado', array('placeholder'=>'estado'));
	?>
	</fieldset>
<?php echo $this->BtForm->end('Enviar'); ?>
</div>
</div>

