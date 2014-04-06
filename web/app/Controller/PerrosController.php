<?php
/**
 * Controlador Perros
 *
 * @author     @fitorec - <chanerec@gmail.com>
 * @copyright  2013-2014 proteccion-canina
 * @created    April 6, 2014, 4:38 pm
 * @property Perro $Perro
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */

App::uses('AppController', 'Controller');

class PerrosController extends AppController {

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
		$this->Perro->recursive = 0;
		$this->set('perros', $this->paginate());
	}// fin index

/**
 * Internauta: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function ver($id = null) {
		$this->Perro->id = $id;
		if (!$this->Perro->exists()) {
			throw new NotFoundException(__('Perro inválido'));
		}
		$this->set('perro', $this->Perro->read(null, $id));
	}// fin ver

/**
 * Internauta: agregar un registro
 *
 * @return void
 */
	public function agregar() {
		if ($this->request->is('post')) {
			$this->Perro->create();
			if ($this->Perro->save($this->request->data)) {
				$this->Session->setFlash(__('El perro fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El perro no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
		$users = $this->Perro->User->find('list');
		$vacunas = $this->Perro->Vacuna->find('list');
		$this->set(compact('users', 'vacunas'));
	}// fin agregar

/**
 * Internauta: editar un registro
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editar($id = null) {
		$this->Perro->id = $id;
		if (!$this->Perro->exists()) {
			throw new NotFoundException(__('Perro inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Perro->save($this->request->data)) {
				$this->Session->setFlash(__('El perro fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El perro no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Perro->read(null, $id);
		}
		$users = $this->Perro->User->find('list');
		$vacunas = $this->Perro->Vacuna->find('list');
		$this->set(compact('users', 'vacunas'));
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
		$this->Perro->id = $id;
		if (!$this->Perro->exists()) {
			throw new NotFoundException(__('Perro inválido'));
		}
		if ($this->Perro->delete()) {
			$this->Session->setFlash(__('El perro fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El perro no pudo ser borrado'));
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
		$this->Perro->recursive = 0;
		$this->set('perros', $this->paginate());
	}// fin admin_index

/**
 * Admin: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_ver($id = null) {
		$this->Perro->id = $id;
		if (!$this->Perro->exists()) {
			throw new NotFoundException(__('Perro inválido'));
		}
		$this->set('perro', $this->Perro->read(null, $id));
	}// fin admin_ver

/**
 * Admin: agregar un registro
 *
 * @return void
 */
	public function admin_agregar() {
		if ($this->request->is('post')) {
			$this->Perro->create();
			if ($this->Perro->save($this->request->data)) {
				$this->Session->setFlash(__('El perro fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El perro no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
		$users = $this->Perro->User->find('list');
		$vacunas = $this->Perro->Vacuna->find('list');
		$this->set(compact('users', 'vacunas'));
	}// fin admin_agregar

/**
 * Admin: editar un registro
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_editar($id = null) {
		$this->Perro->id = $id;
		if (!$this->Perro->exists()) {
			throw new NotFoundException(__('Perro inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Perro->save($this->request->data)) {
				$this->Session->setFlash(__('El perro fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El perro no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Perro->read(null, $id);
		}
		$users = $this->Perro->User->find('list');
		$vacunas = $this->Perro->Vacuna->find('list');
		$this->set(compact('users', 'vacunas'));
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
		$this->Perro->id = $id;
		if (!$this->Perro->exists()) {
			throw new NotFoundException(__('Perro inválido'));
		}
		if ($this->Perro->delete()) {
			$this->Session->setFlash(__('El perro fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El perro no pudo ser borrado'));
		$this->redirect(array('action' => 'index'));
	}// fin admin_borrar

}// fin controlador 