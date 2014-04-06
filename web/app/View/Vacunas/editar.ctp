<?php
/**
 * proteccion-canina
 * Vista:  Vacunas Editar
 */


#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Vacunas Editar');
$this->Html->meta('description', 'Vacunas Editar', array('inline' => false));

#Menu activo
$this->set('menu_activo', 'Inicio');

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-vacunas.editar.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-vacunas.editar.js',
#	),
#		array('inline' => false)
#);
?>
<div class="row-fluid">

<div class="actions col-md-2 well sidebar-nav">
	<h3>Acciones</h3>
	<ul class="nav nav-list">
		<li>
			<?php echo $this->Html->link('<i class="icon-home"></i> Listar vacunas', array('action' => 'index'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->Html->link('<i class="icon-plus"></i> Agregar un vacuna', array('action' => 'agregar'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->BtForm->postLink('<i class="icon-remove"></i> Borrar este vacuna', array('action' => 'borrar', $this->BtForm->value('Vacuna.id')), array('escape' => false), 'Estas seguro de querer borrar el registro # %s?', $this->BtForm->value('Vacuna.id')); ?>
		</li>
		<li class='divider'></li>
		<li class='nav-header'>Enfermedades</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Enfermedades', array('controller' => 'enfermedades', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Enfermedad', array('controller' => 'enfermedades', 'action' => 'agregar'), array('escape' => false)); ?> </li>
		<li class='divider'></li>
		<li class='nav-header'>Perros</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Perros', array('controller' => 'perros', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Perro', array('controller' => 'perros', 'action' => 'agregar'), array('escape' => false)); ?> </li>
	</ul>
</div>

<div class="vacunas form col-md-9">
<?php echo $this->BtForm->create('Vacuna', array('class' => 'well')); ?>
	<fieldset>
		<legend>Editar Vacuna</legend>
	<?php
		echo $this->BtForm->input('id', array('placeholder'=>'id'));
		echo $this->BtForm->input('nombre', array('placeholder'=>'nombre'));
		echo $this->BtForm->input('descripcion', array('placeholder'=>'descripcion'));
		echo $this->BtForm->input('Perro');
	?>
	</fieldset>
<?php echo $this->BtForm->end('Enviar'); ?>
</div>
</div>

