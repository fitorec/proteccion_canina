<?php
/**
 * Controlador Paseos
 *
 * @author     @fitorec - <chanerec@gmail.com>
 * @copyright  2013-2014 proteccion-canina
 * @created    April 6, 2014, 4:36 pm
 * @property Paseo $Paseo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */

App::uses('AppController', 'Controller');

class PaseosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * beforeFilter - Se ejecuta antes de cada acción
 */
	function beforeFilter() {
				//$this->Auth->allow(array('index', 'ver'));
				parent::beforeFilter();
	}// fin beforeFilter

/*********************************************************************************
 * Internauta: Sección acciones                                                  *
 *********************************************************************************/

/**
 * Internauta: index - lista los registros con paginación
 *
 * @return void
 */
	public function index() {
		$this->Paseo->recursive = 0;
		$this->set('paseos', $this->paginate());
	}// fin index

/**
 * Internauta: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function ver($id = null) {
		$this->Paseo->id = $id;
		if (!$this->Paseo->exists()) {
			throw new NotFoundException(__('Paseo inválido'));
		}
		$this->set('paseo', $this->Paseo->read(null, $id));
	}// fin ver

/**
 * Internauta: agregar un registro
 *
 * @return void
 */
	public function agregar() {
		if ($this->request->is('post')) {
			$this->Paseo->create();
			if ($this->Paseo->save($this->request->data)) {
				$this->Session->setFlash(__('El paseo fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El paseo no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
		$posiciones = $this->Paseo->Posicion->find('list');
		$this->set(compact('posiciones'));
	}// fin agregar

/**
 * Internauta: editar un registro
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editar($id = null) {
		$this->Paseo->id = $id;
		if (!$this->Paseo->exists()) {
			throw new NotFoundException(__('Paseo inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Paseo->save($this->request->data)) {
				$this->Session->setFlash(__('El paseo fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El paseo no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Paseo->read(null, $id);
		}
		$posiciones = $this->Paseo->Posicion->find('list');
		$this->set(compact('posiciones'));
	}// fin editar

/**
 * Internauta: borrar un registro
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function borrar($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Paseo->id = $id;
		if (!$this->Paseo->exists()) {
			throw new NotFoundException(__('Paseo inválido'));
		}
		if ($this->Paseo->delete()) {
			$this->Session->setFlash(__('El paseo fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El paseo no pudo ser borrado'));
		$this->redirect(array('action' => 'index'));
	}// fin borrar

/*********************************************************************************
 * Admin: Sección acciones                                                       *
 *********************************************************************************/

/**
 * Admin: index - lista los registros con paginación
 *
 * @return void
 */
	public function admin_index() {
		$this->Paseo->recursive = 0;
		$this->set('paseos', $this->paginate());
	}// fin admin_index

/**
 * Admin: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_ver($id = null) {
		$this->Paseo->id = $id;
		if (!$this->Paseo->exists()) {
			throw new NotFoundException(__('Paseo inválido'));
		}
		$this->set('paseo', $this->Paseo->read(null, $id));
	}// fin admin_ver

/**
 * Admin: agregar un registro
 *
 * @return void
 */
	public function admin_agregar() {
		if ($this->request->is('post')) {
			$this->Paseo->create();
			if ($this->Paseo->save($this->request->data)) {
				$this->Session->setFlash(__('El paseo fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El paseo no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
		$posiciones = $this->Paseo->Posicion->find('list');
		$this->set(compact('posiciones'));
	}// fin admin_agregar

/**
 * Admin: editar un registro
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_editar($id = null) {
		$this->Paseo->id = $id;
		if (!$this->Paseo->exists()) {
			throw new NotFoundException(__('Paseo inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Paseo->save($this->request->data)) {
				$this->Session->setFlash(__('El paseo fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El paseo no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Paseo->read(null, $id);
		}
		$posiciones = $this->Paseo->Posicion->find('list');
		$this->set(compact('posiciones'));
	}// fin admin_editar

/**
 * Admin: borrar un registro
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_borrar($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Paseo->id = $id;
		if (!$this->Paseo->exists()) {
			throw new NotFoundException(__('Paseo inválido'));
		}
		if ($this->Paseo->delete()) {
			$this->Session->setFlash(__('El paseo fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El paseo no pudo ser borrado'));
		$this->redirect(array('action' => 'index'));
	}// fin admin_borrar

}// fin controlador 