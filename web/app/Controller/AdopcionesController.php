<?php
/**
 * Controlador Adopciones
 *
 * @author     @fitorec - <chanerec@gmail.com>
 * @copyright  2013-2014 proteccion-canina
 * @created    April 6, 2014, 3:43 am
 * @property Adopcion $Adopcion
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */

App::uses('AppController', 'Controller');

class AdopcionesController extends AppController {

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
		$this->Adopcion->recursive = 0;
		$this->set('adopciones', $this->paginate());
	}// fin index

/**
 * Internauta: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function ver($id = null) {
		$this->Adopcion->id = $id;
		if (!$this->Adopcion->exists()) {
			throw new NotFoundException(__('Adopcion inválido'));
		}
		$this->set('adopcion', $this->Adopcion->read(null, $id));
	}// fin ver

/**
 * Internauta: agregar un registro
 *
 * @return void
 */
	public function agregar() {
		if ($this->request->is('post')) {
			$this->Adopcion->create();
			if ($this->Adopcion->save($this->request->data)) {
				$this->Session->setFlash(__('El adopcion fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El adopcion no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
		$users = $this->Adopcion->User->find('list');
		$perros = $this->Adopcion->Perro->find('list');
		$this->set(compact('users', 'perros'));
	}// fin agregar

/**
 * Internauta: editar un registro
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editar($id = null) {
		$this->Adopcion->id = $id;
		if (!$this->Adopcion->exists()) {
			throw new NotFoundException(__('Adopcion inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Adopcion->save($this->request->data)) {
				$this->Session->setFlash(__('El adopcion fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El adopcion no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Adopcion->read(null, $id);
		}
		$users = $this->Adopcion->User->find('list');
		$perros = $this->Adopcion->Perro->find('list');
		$this->set(compact('users', 'perros'));
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
		$this->Adopcion->id = $id;
		if (!$this->Adopcion->exists()) {
			throw new NotFoundException(__('Adopcion inválido'));
		}
		if ($this->Adopcion->delete()) {
			$this->Session->setFlash(__('El adopcion fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El adopcion no pudo ser borrado'));
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
		$this->Adopcion->recursive = 0;
		$this->set('adopciones', $this->paginate());
	}// fin admin_index

/**
 * Admin: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_ver($id = null) {
		$this->Adopcion->id = $id;
		if (!$this->Adopcion->exists()) {
			throw new NotFoundException(__('Adopcion inválido'));
		}
		$this->set('adopcion', $this->Adopcion->read(null, $id));
	}// fin admin_ver

/**
 * Admin: agregar un registro
 *
 * @return void
 */
	public function admin_agregar() {
		if ($this->request->is('post')) {
			$this->Adopcion->create();
			if ($this->Adopcion->save($this->request->data)) {
				$this->Session->setFlash(__('El adopcion fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El adopcion no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
		$users = $this->Adopcion->User->find('list');
		$perros = $this->Adopcion->Perro->find('list');
		$this->set(compact('users', 'perros'));
	}// fin admin_agregar

/**
 * Admin: editar un registro
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_editar($id = null) {
		$this->Adopcion->id = $id;
		if (!$this->Adopcion->exists()) {
			throw new NotFoundException(__('Adopcion inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Adopcion->save($this->request->data)) {
				$this->Session->setFlash(__('El adopcion fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El adopcion no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Adopcion->read(null, $id);
		}
		$users = $this->Adopcion->User->find('list');
		$perros = $this->Adopcion->Perro->find('list');
		$this->set(compact('users', 'perros'));
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
		$this->Adopcion->id = $id;
		if (!$this->Adopcion->exists()) {
			throw new NotFoundException(__('Adopcion inválido'));
		}
		if ($this->Adopcion->delete()) {
			$this->Session->setFlash(__('El adopcion fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El adopcion no pudo ser borrado'));
		$this->redirect(array('action' => 'index'));
	}// fin admin_borrar

}// fin controlador 