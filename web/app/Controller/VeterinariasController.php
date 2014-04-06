<?php
/**
 * Controlador Veterinarias
 *
 * @author     @fitorec - <chanerec@gmail.com>
 * @copyright  2013-2014 proteccion-canina
 * @created    April 6, 2014, 4:38 pm
 * @property Veterinaria $Veterinaria
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */

App::uses('AppController', 'Controller');

class VeterinariasController extends AppController {

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
		$this->Veterinaria->recursive = 0;
		$this->set('veterinarias', $this->paginate());
	}// fin index

/**
 * Internauta: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function ver($id = null) {
		$this->Veterinaria->id = $id;
		if (!$this->Veterinaria->exists()) {
			throw new NotFoundException(__('Veterinaria inválido'));
		}
		$this->set('veterinaria', $this->Veterinaria->read(null, $id));
	}// fin ver

/**
 * Internauta: agregar un registro
 *
 * @return void
 */
	public function agregar() {
		if ($this->request->is('post')) {
			$this->Veterinaria->create();
			if ($this->Veterinaria->save($this->request->data)) {
				$this->Session->setFlash(__('El veterinaria fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El veterinaria no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
		$posiciones = $this->Veterinaria->Posicion->find('list');
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
		$this->Veterinaria->id = $id;
		if (!$this->Veterinaria->exists()) {
			throw new NotFoundException(__('Veterinaria inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Veterinaria->save($this->request->data)) {
				$this->Session->setFlash(__('El veterinaria fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El veterinaria no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Veterinaria->read(null, $id);
		}
		$posiciones = $this->Veterinaria->Posicion->find('list');
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
		$this->Veterinaria->id = $id;
		if (!$this->Veterinaria->exists()) {
			throw new NotFoundException(__('Veterinaria inválido'));
		}
		if ($this->Veterinaria->delete()) {
			$this->Session->setFlash(__('El veterinaria fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El veterinaria no pudo ser borrado'));
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
		$this->Veterinaria->recursive = 0;
		$this->set('veterinarias', $this->paginate());
	}// fin admin_index

/**
 * Admin: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_ver($id = null) {
		$this->Veterinaria->id = $id;
		if (!$this->Veterinaria->exists()) {
			throw new NotFoundException(__('Veterinaria inválido'));
		}
		$this->set('veterinaria', $this->Veterinaria->read(null, $id));
	}// fin admin_ver

/**
 * Admin: agregar un registro
 *
 * @return void
 */
	public function admin_agregar() {
		if ($this->request->is('post')) {
			$this->Veterinaria->create();
			if ($this->Veterinaria->save($this->request->data)) {
				$this->Session->setFlash(__('El veterinaria fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El veterinaria no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
		$posiciones = $this->Veterinaria->Posicion->find('list');
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
		$this->Veterinaria->id = $id;
		if (!$this->Veterinaria->exists()) {
			throw new NotFoundException(__('Veterinaria inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Veterinaria->save($this->request->data)) {
				$this->Session->setFlash(__('El veterinaria fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El veterinaria no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Veterinaria->read(null, $id);
		}
		$posiciones = $this->Veterinaria->Posicion->find('list');
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
		$this->Veterinaria->id = $id;
		if (!$this->Veterinaria->exists()) {
			throw new NotFoundException(__('Veterinaria inválido'));
		}
		if ($this->Veterinaria->delete()) {
			$this->Session->setFlash(__('El veterinaria fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El veterinaria no pudo ser borrado'));
		$this->redirect(array('action' => 'index'));
	}// fin admin_borrar

}// fin controlador 