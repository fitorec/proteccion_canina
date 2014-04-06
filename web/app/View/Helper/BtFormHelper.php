<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 *
 * Licensed under The MIT License
 *
 * Copyright (c) La Pâtisserie, Inc. (http://patisserie.keensoftware.com/)
 * @license     MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('FormHelper', 'View/Helper');

class BtFormHelper extends FormHelper {

/**
 * Default input values with bootstrap classes
 * Changed order of error and after to be able to display validation error messages inline
 */
	protected $_inputDefaults = array(
		'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
		'div' => 'form-group',
		'label' => array('class' => 'col-sm-2  control-label'),
		'between' => '<div class="input-group col-sm-4">',
		'after' => '</div>',
		'class' => 'input-xxlarge',
		'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline'))
	);

/**
 * Added an array_merge_recursive for labels to combine $_inputDefaults with specific view markup for labels like custom text.
 * Also removed null array for options existing in $_inputDefaults.
 */
	protected function _parseOptions($options) {
		if (!empty($options['label'])) {
			//manage case 'label' => 'your label' as well as 'label' => array('text' => 'your label') before array_merge()
			if (!is_array($options['label'])) {
				$options['label'] = array('text' => $options['label']);
			}
			$options['label'] = array_merge_recursive($options['label'], $this->_inputDefaults['label']);
		}
		$options = array_merge(
			array('before' => null),
			$this->_inputDefaults,
			$options
		);
		return parent::_parseOptions($options);
	}

/**
 * adds the default class 'form-horizontal to the <form>
 * 
 */
	public function create($model = null, $options = array()) {
		$class = array(
			'class' => 'form-horizontal',
		);
		$options = array_merge($class, $options);
		return parent::create($model, $options);
	}

/**
 * modified the first condition with a more general empty() otherwise if $default is an empty array
 * !is_null() returns true and $this->_inputDefaults is erased
 */
	public function inputDefaults($defaults = null, $merge = false) {
		if (!empty($defaults)) {
			if ($merge) {
				$this->_inputDefaults = array_merge($this->_inputDefaults, (array)$defaults);
			} else {
				$this->_inputDefaults = (array)$defaults;
			}
		}
		return $this->_inputDefaults;
	}

  public function input($fieldName, $options = array()) {
    if(isset($options['icon'])) {
      $iconClass = $options['icon'];
      if($this->_introspectModel($this->model(), 'validates', $fieldName)) {
        $iconClass .= ' red';
      }
      $options['between'] = '<label class="block clearfix">'
        .'<span class="block input-icon input-icon-right">';
      $options['after'] = '<i class="'.$iconClass.'"></i></label>';
      $options['class'] = 'form-control';
      $options['div'] = '';
      $options['label'] = '';
      if(!isset($options['placeholder'])){
        $text = $fieldName;
        if (strpos($fieldName, '.') !== false) {
          $fieldElements = explode('.', $fieldName);
          $text = array_pop($fieldElements);
        }
        if (substr($text, -3) === '_id') {
          $text = substr($text, 0, -3);
        }
        $options['placeholder'] = __(Inflector::humanize(Inflector::underscore($text)));
      }
    }
    return parent::input($fieldName, $options);
  }
  
  public function submit($caption = null, $options = array()) {
    $label = ($caption!==null)? $caption : 'label';
    $class = isset($options['class'])? $options['class'] : 'btn-success';
    $iconOK = isset($options['icon-ok'])? $options['icon-ok'] : 'icon-ok';
    $iconCancel = isset($options['icon-cancel'])? $options['icon-cancel'] : 'icon-reply';
    $labelCancel = isset($options['label-cancel'])? $options['label-cancel'] : 'Cancelar';
    
    $idBtnCancelar = strtolower($this->defaultModel) . 'CancelarBtn';
    $out = '<button type="submit" class="btn btn-large %s">'
            . '<i class="%s"></i> '
            . '%s</button> | ';
    //genera un 
    if(isset($options['cancel'])) {
      $out .= '<a id="%s" href="'.$options['cancel'].'" class="btn btn-large btn-danger">'
              . '<i class="'.$iconCancel.'"></i> '.h($labelCancel)
              . '</a>';
    } else {
        $out .= '<button id="%s" type="reset" class="btn btn-large btn-danger">'
          . '<i class="'.$iconCancel.'"></i> '.h($labelCancel)
          . '</button>';
    }
    return sprintf($out, $class, $iconOK, $label, $idBtnCancelar);
  }

}
