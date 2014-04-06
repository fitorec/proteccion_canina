<?php
/**
 * e-escolar.net
 * Plantilla index - para cakephp con twbootstrap
 */
echo "<?php\n";
$baseCssJs = 'prefix-'.strtolower($pluralHumanName) . '.index';
$titulo = $pluralHumanName . ' Index';
$pre1="\n\t";
$pre2="\n\t\t";
$pre3="\n\t\t\t";
$pre4="\n\t\t\t";

?>
/**
 * e-escolar.net
 * Vista:  <?php echo $titulo."\n"; ?>
 */
#iniciando la autenticación
$this->Html->initAuth($userAuth);

#sección metaDatos
$this->set('title_for_layout', 'e-scolar - <?php echo $titulo; ?>');
#Menu activo
$this->set('menu_activo', 'Inicio');

$this->Html->meta('description', '<?php echo $titulo; ?>', array('inline' => false));

#Sección CSS
#$this->Html->css(
#    array(
#			'<?php echo $baseCssJs; ?>.css',
#		),
#			'stylesheet', array('inline' => false)
#);

#Sección JavaScript
#$this->Html->script(
#	array(
#		'<?php echo $baseCssJs; ?>.js',
#	),
#		array('inline' => false)
#);
<?php echo "?>\n"; ?>
<div class="row-fluid">
	<div class="actions col-md-2 well sidebar-nav">
	<h3>Acciones</h3>
	<ul class="nav nav-list">
		<li><?php
				echo $pre1 . "<?php";
				echo $pre2 . "echo \$this->Html->link(";
				echo $pre3 . "'<i class=\"icon-plus\"></i> Agregar',";
				echo $pre3 . "array('action' => 'agregar'),";
				echo $pre3 . "array('escape' => false)";
				echo $pre2 . "); ?>\n";
				?>
		</li>
<?php
	$done = array();
	foreach ($associations as $type => $data) {
		foreach ($data as $alias => $details) {
			if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) { ?>
			<li class='divider'></li>
			<li class='nav-header'>
				<?php echo Inflector::humanize($details['controller'])."\n" ?>
			</li>
			<li><?php
				echo $pre1 . "<?php";
				echo $pre2 . "echo \$this->Html->link(";
				echo $pre3 . "'<i class=\"icon-list\"></i> Listar',";
				echo $pre3 . "array('controller' => '{$details['controller']}', 'action' => 'index'),";
				echo $pre3 . "array('escape' => false)";
				echo $pre2 . "); ?>\n";
				?>
			</li>
			<li><?php
				echo $pre1 . "<?php";
				echo $pre2 . "echo \$this->Html->link(";
				echo $pre3 . "'<i class=\"icon-plus\"></i> Agregar',";
				echo $pre3 . "array('controller' => '{$details['controller']}', 'action' => 'agregar'),";
				echo $pre3 . "array('escape' => false)";
				echo $pre2 . "); ?>\n";
				?>
			</li>
<?php
			}
		}
	}
?>
	</ul>
</div>

<div class="<?php echo $pluralVar; ?> index col-md-9">
	<div class="stacked widget widget-table">
		<div class="widget-header">
			<span class="icon-list-alt"></span>
			<h3>Lista de <?php echo $pluralVar; ?></h3>
		</div>
	<div class="widget-content">
	<table class="table table-bordered table-striped">
	<thead>
	<tr>
	<?php  foreach ($fields as $field): ?>
		<th><?php echo "<?php echo \$this->Paginator->sort('{$field}', null, array('title' => 'Organizar por nombre', 'data-placement'=>'bottom')); ?>"; ?></th>
	<?php endforeach; ?>
		<th class="actions">Acciones</th>
	</tr>
	</thead>
	<tbody>
	<?php
	echo $pre1 . "<?php";
	echo $pre2 . "foreach (\${$pluralVar} as \${$singularVar}): ?>";
	echo $pre2 . "<tr>";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo $pre2 . "<td>";
						echo $pre3 . "<?php echo \$this->Html->link(";
						echo $pre4 . "\${$singularVar}['{$alias}']['{$details['displayField']}'],";
						echo $pre4 . "array('controller' => '{$details['controller']}', 'action' => 'ver', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])";
						echo $pre3 . ");";
						echo $pre3 . "?>";
						echo $pre2 . "</td>";
						break;
					}
				}
			}
			if ($isKey !== true) {
				if($field == $details['primaryKey']) {
						echo $pre2 . "<td>";
						echo $pre3 . "<?php echo \$this->Html->link(";
						echo $pre4 . "\${$singularVar}['{$modelClass}']['{$field}'],";
						echo $pre4 . "array('action' => 'ver', \${$singularVar}['{$modelClass}']['{$field}'])";
						echo $pre3 . "); ?>";
						echo $pre2 . "</td>";
				} else {
					echo $pre2 . "<td>";
					echo $pre3 . "<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;";
					echo $pre2 . "</td>";
				}
			}
		}
		echo $pre2 . "<td class=\"actions\">";
?>
<div class="btn-group">
	<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li><?php
			echo "\n\t<?php \n\t\techo \$this->Html->link(".
						"\n\t\t'<i class=\"icon-eye-open\"></i> Ver',".
						"\n\t\tarray('action' => 'ver', \${$singularVar}['{$modelClass}']['{$primaryKey}']),".
						"\n\t\tarray('escape' => false)".
						"\n\t); ?>\n";
			?>
		</li>
		<li><?php
			echo "\n\t<?php \n\t\techo \$this->Html->link(".
						"\n\t\t'<i class=\"icon-pencil\"></i> Editar',".
						"\n\t\tarray('action' => 'editar', \${$singularVar}['{$modelClass}']['{$primaryKey}']),".
						"\n\t\tarray('escape' => false)".
						"\n\t); ?>\n";
			?>
		</li>
		<li><?php
			echo "\n\t<?php \n\t\techo \$this->Form->postLink(".
						"\n\t\t'<i class=\"icon-trash\"></i> Borrar',".
						"\n\t\tarray('action' => 'borrar', \${$singularVar}['{$modelClass}']['{$primaryKey}']),".
						"\n\t\tarray('escape' => false),".
						"\n\t\t'¿Deseas eliminar este registro?'".
						"\n\t); ?>\n";
			?>
		</li>
	</ul>
</div>
</td>
</tr>
<?php
	echo "<?php endforeach; ?>\n";
	?>
	</tbody>
	</table>
	</div>
</div>
	<small class="pull-right">
	<?php echo "<?php
	echo \$this->Paginator->counter(array(
	'format' => 'Página {:page} de {:pages}, viendo {:current} {$pluralHumanName} de un total de {:count}, iniciando en el registro {:start}, cabando en {:end}'
	));
	?>\n"; ?>
	</small>
<div class="paging">
	<?php
		echo "<?php\n";
		echo "\t\techo \$this->Paginator->prev('< Anterior', array(), null, array('class' => 'prev disabled'));\n";
		echo "\t\techo \$this->Paginator->numbers(array('separator' => ''));\n";
		echo "\t\techo \$this->Paginator->next('Siguiente >', array(), null, array('class' => 'next disabled'));\n";
		echo "\t?>\n";
	?>
	</div>
</div>
</div>
