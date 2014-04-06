<?php
/**
 * Controlador Enfermedades
 *
 * @author     @fitorec - <chanerec@gmail.com>
 * @copyright  2013-2014 proteccion-canina
 * @created    April 6, 2014, 3:06 am
 * @property Enfermedad $Enfermedad
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */

App::uses('AppController', 'Controller');

class EnfermedadesController extends AppController {

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
		$this->Enfermedad->recursive = 0;
		$this->set('enfermedades', $this->paginate());
	}// fin index

/**
 * Internauta: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function ver($id = null) {
		$this->Enfermedad->id = $id;
		if (!$this->Enfermedad->exists()) {
			throw new NotFoundException(__('Enfermedad inválido'));
		}
		$this->set('enfermedad', $this->Enfermedad->read(null, $id));
	}// fin ver

/**
 * Internauta: agregar un registro
 *
 * @return void
 */
	public function agregar() {
		if ($this->request->is('post')) {
			$this->Enfermedad->create();
			if ($this->Enfermedad->save($this->request->data)) {
				$this->Session->setFlash(__('El enfermedad fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El enfermedad no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
		$vacunas = $this->Enfermedad->Vacuna->find('list');
		$this->set(compact('vacunas'));
	}// fin agregar

/**
 * Internauta: editar un registro
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editar($id = null) {
		$this->Enfermedad->id = $id;
		if (!$this->Enfermedad->exists()) {
			throw new NotFoundException(__('Enfermedad inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Enfermedad->save($this->request->data)) {
				$this->Session->setFlash(__('El enfermedad fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El enfermedad no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Enfermedad->read(null, $id);
		}
		$vacunas = $this->Enfermedad->Vacuna->find('list');
		$this->set(compact('vacunas'));
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
		$this->Enfermedad->id = $id;
		if (!$this->Enfermedad->exists()) {
			throw new NotFoundException(__('Enfermedad inválido'));
		}
		if ($this->Enfermedad->delete()) {
			$this->Session->setFlash(__('El enfermedad fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El enfermedad no pudo ser borrado'));
		$this->redirect(array('action' => 'index'));
	}// fin borrar

}// fin controlador 
