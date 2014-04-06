<?php
/**
 * proteccion-canina
 * Vista:  Enfermedades Editar
 */

#iniciando la autenticación

#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Enfermedades Editar');
$this->Html->meta('description', 'Enfermedades Editar', array('inline' => false));

#Menu activo
$this->set('menu_activo', 'Inicio');

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-enfermedades.editar.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-enfermedades.editar.js',
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
		<li>
			<?php echo $this->Html->link('<i class="icon-plus"></i> Agregar un enfermedad', array('action' => 'agregar'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->BtForm->postLink('<i class="icon-remove"></i> Borrar este enfermedad', array('action' => 'borrar', $this->BtForm->value('Enfermedad.id')), array('escape' => false), 'Estas seguro de querer borrar el registro # %s?', $this->BtForm->value('Enfermedad.id')); ?>
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
		<legend>Editar Enfermedad</legend>
	<?php
		echo $this->BtForm->input('id', array('placeholder'=>'id'));
		echo $this->BtForm->input('vacuna_id', array('placeholder'=>'vacuna_id'));
		echo $this->BtForm->input('nombre', array('placeholder'=>'nombre'));
		echo $this->BtForm->input('descripcion', array('placeholder'=>'descripcion'));
	?>
	</fieldset>
<?php echo $this->BtForm->end('Enviar'); ?>
</div>
</div>

