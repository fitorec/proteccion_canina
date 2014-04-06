<?php
/**
 * proteccion-canina
 * Vista:  Veterinarias Agregar
 */



#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Veterinarias Agregar');
$this->Html->meta('description', 'Veterinarias Agregar', array('inline' => false));

#Menu activo
$this->set('menu_activo', 'Inicio');

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-veterinarias.agregar.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-veterinarias.agregar.js',
#	),
#		array('inline' => false)
#);
?>
<div class="row-fluid">

<div class="actions col-md-2 well sidebar-nav">
	<h3>Acciones</h3>
	<ul class="nav nav-list">
		<li>
			<?php echo $this->Html->link('<i class="icon-home"></i> Listar veterinarias', array('action' => 'index'), array('escape' => false)); ?>
		</li>
		<li class='divider'></li>
		<li class='nav-header'>Posiciones</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Posiciones', array('controller' => 'posiciones', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Posicion', array('controller' => 'posiciones', 'action' => 'agregar'), array('escape' => false)); ?> </li>
	</ul>
</div>

<div class="veterinarias form col-md-9">
<?php echo $this->BtForm->create('Veterinaria', array('class' => 'well')); ?>
	<fieldset>
		<legend>Agregar Veterinaria</legend>
	<?php
		echo $this->BtForm->input('nombre', array('placeholder'=>'nombre'));
		echo $this->BtForm->input('direccion', array('placeholder'=>'direccion'));
		echo $this->BtForm->input('posicion_id', array('placeholder'=>'posicion_id'));
		echo $this->BtForm->input('contacto', array('placeholder'=>'contacto'));
		echo $this->BtForm->input('telefono', array('placeholder'=>'telefono'));
		echo $this->BtForm->input('direccion_web', array('placeholder'=>'direccion_web'));
		echo $this->BtForm->input('email', array('placeholder'=>'email'));
	?>
	</fieldset>
<?php echo $this->BtForm->end('Enviar'); ?>
</div>
</div>

