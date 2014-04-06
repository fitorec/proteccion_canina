<?php
/**
 * Controlador Extraviados
 *
 * @author     @fitorec - <chanerec@gmail.com>
 * @copyright  2013-2014 proteccion-canina
 * @created    April 6, 2014, 3:47 am
 * @property Extraviado $Extraviado
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */

App::uses('AppController', 'Controller');

class ExtraviadosController extends AppController {

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
		$this->Extraviado->recursive = 0;
		$this->set('extraviados', $this->paginate());
	}// fin index

/**
 * Internauta: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function ver($id = null) {
		$this->Extraviado->id = $id;
		if (!$this->Extraviado->exists()) {
			throw new NotFoundException(__('Extraviado inválido'));
		}
		$this->set('extraviado', $this->Extraviado->read(null, $id));
	}// fin ver

/**
 * Internauta: agregar un registro
 *
 * @return void
 */
	public function agregar() {
		if ($this->request->is('post')) {
			$this->Extraviado->create();
			if ($this->Extraviado->save($this->request->data)) {
				$this->Session->setFlash(__('El extraviado fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El extraviado no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
		$users = $this->Extraviado->User->find('list');
		$perros = $this->Extraviado->Perro->find('list');
		$posiciones = $this->Extraviado->Posicion->find('list');
		$this->set(compact('users', 'perros', 'posiciones'));
	}// fin agregar

/**
 * Internauta: editar un registro
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editar($id = null) {
		$this->Extraviado->id = $id;
		if (!$this->Extraviado->exists()) {
			throw new NotFoundException(__('Extraviado inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Extraviado->save($this->request->data)) {
				$this->Session->setFlash(__('El extraviado fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El extraviado no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Extraviado->read(null, $id);
		}
		$users = $this->Extraviado->User->find('list');
		$perros = $this->Extraviado->Perro->find('list');
		$posiciones = $this->Extraviado->Posicion->find('list');
		$this->set(compact('users', 'perros', 'posiciones'));
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
		$this->Extraviado->id = $id;
		if (!$this->Extraviado->exists()) {
			throw new NotFoundException(__('Extraviado inválido'));
		}
		if ($this->Extraviado->delete()) {
			$this->Session->setFlash(__('El extraviado fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El extraviado no pudo ser borrado'));
		$this->redirect(array('action' => 'index'));
	}// fin borrar

}// fin controlador 