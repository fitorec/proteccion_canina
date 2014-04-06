<?php
/**
 * proteccion-canina
 * Vista:  Paseos Editar
 */

#iniciando la autenticación
$this->Html->initAuth($userAuth);

#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Paseos Editar');
$this->Html->meta('description', 'Paseos Editar', array('inline' => false));

#Menu activo
$this->set('menu_activo', 'Inicio');

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-paseos.editar.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-paseos.editar.js',
#	),
#		array('inline' => false)
#);
?>
<div class="row-fluid">

<div class="actions col-md-2 well sidebar-nav">
	<h3>Acciones</h3>
	<ul class="nav nav-list">
		<li>
			<?php echo $this->Html->link('<i class="icon-home"></i> Listar paseos', array('action' => 'index'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->Html->link('<i class="icon-plus"></i> Agregar un paseo', array('action' => 'agregar'), array('escape' => false)); ?>
		</li>
		<li>
			<?php echo $this->BtForm->postLink('<i class="icon-remove"></i> Borrar este paseo', array('action' => 'borrar', $this->BtForm->value('Paseo.id')), array('escape' => false), 'Estas seguro de querer borrar el registro # %s?', $this->BtForm->value('Paseo.id')); ?>
		</li>
		<li class='divider'></li>
		<li class='nav-header'>Posiciones</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Posiciones', array('controller' => 'posiciones', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar Posicion', array('controller' => 'posiciones', 'action' => 'agregar'), array('escape' => false)); ?> </li>
	</ul>
</div>

<div class="paseos form col-md-9">
<?php echo $this->BtForm->create('Paseo', array('class' => 'well')); ?>
	<fieldset>
		<legend>Editar Paseo</legend>
	<?php
		echo $this->BtForm->input('id', array('placeholder'=>'id'));
		echo $this->BtForm->input('lugar', array('placeholder'=>'lugar'));
		echo $this->BtForm->input('posicion_id', array('placeholder'=>'posicion_id'));
		echo $this->BtForm->input('fecha_hora', array('placeholder'=>'fecha_hora'));
	?>
	</fieldset>
<?php echo $this->BtForm->end('Enviar'); ?>
</div>
</div>

