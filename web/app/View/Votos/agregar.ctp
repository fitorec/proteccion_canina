<?php
/**
 * proteccion-canina
 * Vista:  Votos Agregar
 */



#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Votos Agregar');
$this->Html->meta('description', 'Votos Agregar', array('inline' => false));

#Menu activo
$this->set('menu_activo', 'Inicio');

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-votos.agregar.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-votos.agregar.js',
#	),
#		array('inline' => false)
#);
?>
<div class="row-fluid">

<div class="actions col-md-2 well sidebar-nav">
	<h3>Acciones</h3>
	<ul class="nav nav-list">
		<li>
			<?php echo $this->Html->link('<i class="icon-home"></i> Listar votos', array('action' => 'index'), array('escape' => false)); ?>
		</li>
		<li class='divider'></li>
		<li class='nav-header'>Users</li>
		<li><?php echo $this->Html->link('<i class="icon-home"></i> Listar Users', array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<i class="icon-plus"></i> Agregar User', array('controller' => 'users', 'action' => 'agregar'), array('escape' => false)); ?> </li>
	</ul>
</div>

<div class="votos form col-md-9">
<?php echo $this->BtForm->create('Voto', array('class' => 'well')); ?>
	<fieldset>
		<legend>Agregar Voto</legend>
	<?php
		echo $this->BtForm->input('user_id', array('placeholder'=>'user_id'));
		echo $this->BtForm->input('tabla_nombre', array('placeholder'=>'tabla_nombre'));
		echo $this->BtForm->input('id_externo', array('placeholder'=>'id_externo'));
		echo $this->BtForm->input('voto', array('placeholder'=>'voto'));
	?>
	</fieldset>
<?php echo $this->BtForm->end('Enviar'); ?>
</div>
</div>

