<?php
/**
 * proteccion-canina
 * Vista:  Enfermedades Agregar
 */


#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Enfermedades Agregar');
$this->Html->meta('description', 'Enfermedades Agregar', array('inline' => false));

#Menu activo
$this->set('menu_activo', 'Inicio');

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-enfermedades.agregar.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-enfermedades.agregar.js',
#	),
#		array('inline' => false)
#);
?>
<div class="row-fluid">

<div class="actions col-md-2 well sidebar-nav">
	<h3>Acciones</h3>
	<ul class="nav nav-list">
		<li>
			<?php echo $this->Html->link('<i class="icon-home"></i> Listar enfermedades', array('action' => 'index'), array('escape' => false)); ?>
		</li>
		<li class='divider'></li>
		<li class='nav-header'>Vacunas</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Vacunas', array('controller' => 'vacunas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Vacuna', array('controller' => 'vacunas', 'action' => 'agregar'), array('escape' => false)); ?> </li>
	</ul>
</div>

<div class="enfermedades form col-md-9">
<?php echo $this->BtForm->create('Enfermedad', array('class' => 'well')); ?>
	<fieldset>
		<legend>Agregar Enfermedad</legend>
	<?php
		echo $this->BtForm->input('vacuna_id', array('placeholder'=>'vacuna_id'));
		echo $this->BtForm->input('nombre', array('placeholder'=>'nombre'));
		echo $this->BtForm->input('descripcion', array('placeholder'=>'descripcion'));
	?>
	</fieldset>
<?php echo $this->BtForm->end('Enviar'); ?>
</div>
</div>

