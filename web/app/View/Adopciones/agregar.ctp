<?php
/**
 * proteccion-canina
 * Vista:  Adopciones Agregar
 */



#sección metaDatos
$this->set('title_for_layout', 'proteccion-canina - Adopciones Agregar');
$this->Html->meta('description', 'Adopciones Agregar', array('inline' => false));

#Menu activo
$this->set('menu_activo', 'Inicio');

#Sección CSS
#$this->Html->css(
#    array(
#			'prefix-adopciones.agregar.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'prefix-adopciones.agregar.js',
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
<?php
  echo $this->BtForm->create('Adopcion', array('class' => 'well'));
  echo $this->BtForm->input('Perro.raza', array('placeholder'=>'raza'));
  echo $this->BtForm->input('Perro.fecha_nacimiento', array('placeholder'=>'fecha_nacimiento'));
  echo $this->BtForm->input('Perro.color', array('placeholder'=>'color'));
  echo $this->BtForm->input('Perro.peso', array('placeholder'=>'peso'));
  echo $this->BtForm->input('Perro.tamanio', array('placeholder'=>'tamanio'));
  echo $this->BtForm->input(
      'Perro.vacuna',
      array(
        'options' => $vacunas,
        'empty'=>'--ninguna--'
      )
  );
  echo $this->BtForm->end('Enviar');
?>
</div>
</div>

