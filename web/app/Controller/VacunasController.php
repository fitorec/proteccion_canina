<?php
/**
 * Controlador Vacunas
 *
 * @author     @fitorec - <chanerec@gmail.com>
 * @copyright  2013-2014 proteccion-canina
 * @created    April 6, 2014, 3:17 am
 * @property Vacuna $Vacuna
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */

App::uses('AppController', 'Controller');

class VacunasController extends AppController {

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
		$this->Vacuna->recursive = 0;
		$this->set('vacunas', $this->paginate());
	}// fin index

/**
 * Internauta: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function ver($id = null) {
		$this->Vacuna->id = $id;
		if (!$this->Vacuna->exists()) {
			throw new NotFoundException(__('Vacuna inválido'));
		}
		$this->set('vacuna', $this->Vacuna->read(null, $id));
	}// fin ver

/**
 * Internauta: agregar un registro
 *
 * @return void
 */
	public function agregar() {
		if ($this->request->is('post')) {
			$this->Vacuna->create();
			if ($this->Vacuna->save($this->request->data)) {
				$this->Session->setFlash('La vacuna fue guardada con exito');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El vacuna no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
		$perros = $this->Vacuna->Perro->find('list');
		$this->set(compact('perros'));
	}// fin agregar

/**
 * Internauta: editar un registro
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editar($id = null) {
		$this->Vacuna->id = $id;
		if (!$this->Vacuna->exists()) {
			throw new NotFoundException(__('Vacuna inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vacuna->save($this->request->data)) {
				$this->Session->setFlash(__('El vacuna fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El vacuna no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->Vacuna->read(null, $id);
		}
		$perros = $this->Vacuna->Perro->find('list');
		$this->set(compact('perros'));
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
		$this->Vacuna->id = $id;
		if (!$this->Vacuna->exists()) {
			throw new NotFoundException(__('Vacuna inválido'));
		}
		if ($this->Vacuna->delete()) {
			$this->Session->setFlash(__('El vacuna fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El vacuna no pudo ser borrado'));
		$this->redirect(array('action' => 'index'));
	}// fin borrar
  
  /**
   * Descripción de la función
   *
   * @param tipo $parametro1 descripción del párametro 1.
   * @return tipo descripcion de lo que regresa
   * @access publico/privado
   * @link [URL de mayor infor]
   */
  function mapa($lat = 0, $long = 0) {
    if($lat == 0 and $long== 0) {
      //optener las coordenadas desde la IP
    }
    
  }//end function

}// fin controlador 
