<?php
/**
 * Controlador Votos
 *
 * @author     @fitorec - <chanerec@gmail.com>
 * @copyright  2013-2014 proteccion-canina
 * @created    April 6, 2014, 4:39 pm
 * @property Voto $Voto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */

App::uses('AppController', 'Controller');

class VotosController extends AppController {

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
		$this->Voto->recursive = 0;
		$this->set('votos', $this->paginate());
	}// fin index

/**
 * Internauta: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function ver($id = null) {
		$this->Voto->id = $id;
		if (!$this->Voto->exists()) {
			throw new NotFoundException(__('Voto inválido'));
		}
		$this->set('voto', $this->Voto->read(null, $id));
	}// fin ver

/**
 * Internauta: agregar un registro
 *
 * @return void
 */
	public function agregar() {
		if ($this->request->is('post')) {
			$this->Voto->create();
			if ($this->Voto->save($this->request->data)) {
				$this->Session->setFlash(__('El voto fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El voto no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
		$users = $this->Voto->User->find('list');
		$this->set(compact('users'));
	}// fin agregar

/**
 * Internauta: editar un registro
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editar($id = null) {
		$this->Voto->id = $id;
		if (!$this->Voto->exists()) {
			throw new NotFoundException(__('Voto inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Voto->save($this->request->data)) {
				$this->Session->setFlash(__('El voto fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El voto no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Voto->read(null, $id);
		}
		$users = $this->Voto->User->find('list');
		$this->set(compact('users'));
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
		$this->Voto->id = $id;
		if (!$this->Voto->exists()) {
			throw new NotFoundException(__('Voto inválido'));
		}
		if ($this->Voto->delete()) {
			$this->Session->setFlash(__('El voto fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El voto no pudo ser borrado'));
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
		$this->Voto->recursive = 0;
		$this->set('votos', $this->paginate());
	}// fin admin_index

/**
 * Admin: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_ver($id = null) {
		$this->Voto->id = $id;
		if (!$this->Voto->exists()) {
			throw new NotFoundException(__('Voto inválido'));
		}
		$this->set('voto', $this->Voto->read(null, $id));
	}// fin admin_ver

/**
 * Admin: agregar un registro
 *
 * @return void
 */
	public function admin_agregar() {
		if ($this->request->is('post')) {
			$this->Voto->create();
			if ($this->Voto->save($this->request->data)) {
				$this->Session->setFlash(__('El voto fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El voto no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
		$users = $this->Voto->User->find('list');
		$this->set(compact('users'));
	}// fin admin_agregar

/**
 * Admin: editar un registro
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_editar($id = null) {
		$this->Voto->id = $id;
		if (!$this->Voto->exists()) {
			throw new NotFoundException(__('Voto inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Voto->save($this->request->data)) {
				$this->Session->setFlash(__('El voto fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El voto no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Voto->read(null, $id);
		}
		$users = $this->Voto->User->find('list');
		$this->set(compact('users'));
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
		$this->Voto->id = $id;
		if (!$this->Voto->exists()) {
			throw new NotFoundException(__('Voto inválido'));
		}
		if ($this->Voto->delete()) {
			$this->Session->setFlash(__('El voto fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El voto no pudo ser borrado'));
		$this->redirect(array('action' => 'index'));
	}// fin admin_borrar

}// fin controlador 