<?php
/**
 * proteccion-canina
 * Vista:  Adopciones Editar
 */



#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Adopciones Editar');
$this->Html->meta('description', 'Adopciones Editar', array('inline' => false));

#Menu activo
$this->set('menu_activo', 'Inicio');

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-adopciones.editar.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-adopciones.editar.js',
#	),
#		array('inline' => false)
#);
?>
<div class="row-fluid">

<div class="actions col-md-2 well sidebar-nav">
	<h3>Acciones</h3>
	<ul class="nav nav-list">
		<li>
			<?php echo $this->Html->link('<i class="icon-home"></i> Listar adopciones', array('action' => 'index'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->Html->link('<i class="icon-plus"></i> Agregar un adopcion', array('action' => 'agregar'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->BtForm->postLink('<i class="icon-remove"></i> Borrar este adopcion', array('action' => 'borrar', $this->BtForm->value('Adopcion.id')), array('escape' => false), 'Estas seguro de querer borrar el registro # %s?', $this->BtForm->value('Adopcion.id')); ?>
		</li>
		<li class='divider'></li>
		<li class='nav-header'>Users</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Users', array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar User', array('controller' => 'users', 'action' => 'agregar'), array('escape' => false)); ?> </li>
		<li class='divider'></li>
		<li class='nav-header'>Perros</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Perros', array('controller' => 'perros', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Perro', array('controller' => 'perros', 'action' => 'agregar'), array('escape' => false)); ?> </li>
	</ul>
</div>

<div class="adopciones form col-md-9">
<?php echo $this->BtForm->create('Adopcion', array('class' => 'well')); ?>
	<fieldset>
		<legend>Editar Adopcion</legend>
	<?php
		echo $this->BtForm->input('id', array('placeholder'=>'id'));
		echo $this->BtForm->input('user_id', array('placeholder'=>'user_id'));
		echo $this->BtForm->input('usuario_quien_dio_en_adopcion', array('placeholder'=>'usuario_quien_dio_en_adopcion'));
		echo $this->BtForm->input('estado', array('placeholder'=>'estado'));
		echo $this->BtForm->input('perro_id', array('placeholder'=>'perro_id'));
	?>
	</fieldset>
<?php echo $this->BtForm->end('Enviar'); ?>
</div>
</div>

