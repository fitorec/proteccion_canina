<?php
/**
 * proteccion-canina
 * Vista:  Posiciones Editar
 */



#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Posiciones Editar');
$this->Html->meta('description', 'Posiciones Editar', array('inline' => false));

#Menu activo
$this->set('menu_activo', 'Inicio');

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-posiciones.editar.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-posiciones.editar.js',
#	),
#		array('inline' => false)
#);
?>
<div class="row-fluid">

<div class="actions col-md-2 well sidebar-nav">
	<h3>Acciones</h3>
	<ul class="nav nav-list">
		<li>
			<?php echo $this->Html->link('<i class="icon-home"></i> Listar posiciones', array('action' => 'index'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->Html->link('<i class="icon-plus"></i> Agregar un posicion', array('action' => 'agregar'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->BtForm->postLink('<i class="icon-remove"></i> Borrar este posicion', array('action' => 'borrar', $this->BtForm->value('Posicion.id')), array('escape' => false), 'Estas seguro de querer borrar el registro # %s?', $this->BtForm->value('Posicion.id')); ?>
		</li>
		<li class='divider'></li>
		<li class='nav-header'>Extraviados</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Extraviados', array('controller' => 'extraviados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Extraviado', array('controller' => 'extraviados', 'action' => 'agregar'), array('escape' => false)); ?> </li>
		<li class='divider'></li>
		<li class='nav-header'>Paseos</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Paseos', array('controller' => 'paseos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Paseo', array('controller' => 'paseos', 'action' => 'agregar'), array('escape' => false)); ?> </li>
		<li class='divider'></li>
		<li class='nav-header'>Veterinarias</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Veterinarias', array('controller' => 'veterinarias', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Veterinaria', array('controller' => 'veterinarias', 'action' => 'agregar'), array('escape' => false)); ?> </li>
	</ul>
</div>

<div class="posiciones form col-md-9">
<?php echo $this->BtForm->create('Posicion', array('class' => 'well')); ?>
	<fieldset>
		<legend>Editar Posicion</legend>
	<?php
		echo $this->BtForm->input('id', array('placeholder'=>'id'));
		echo $this->BtForm->input('lat', array('placeholder'=>'lat'));
		echo $this->BtForm->input('long', array('placeholder'=>'long'));
	?>
	</fieldset>
<?php echo $this->BtForm->end('Enviar'); ?>
</div>
</div>

