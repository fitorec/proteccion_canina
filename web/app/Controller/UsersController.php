<?php
/**
 * Controlador Users
 *
 * @author     @fitorec - <chanerec@gmail.com>
 * @copyright  2013-2014 proteccion-canina
 * @created    April 6, 2014, 4:43 pm
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */

App::uses('AppController', 'Controller');

class UsersController extends AppController {

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
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}// fin index

/**
 * Internauta: ver un registro en especifico
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function ver($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('User inválido'));
		}
		$this->set('user', $this->User->read(null, $id));
	}// fin ver

/**
 * Internauta: agregar un registro
 *
 * @return void
 */
	public function agregar() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El user fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El user no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		}
	}// fin agregar

/**
 * Internauta: editar un registro
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editar($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('User inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El user fue guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El user no pudo ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('User inválido'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('El user fue borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El user no pudo ser borrado'));
		$this->redirect(array('action' => 'index'));
	}// fin borrar
  
  /**
	 * funcion login
	 *
	 * @param tipo $parametro1 descripción del párametro 1.
	 * @return tipo descripcion de lo que regresa
	 * @access publico/privado
	 * @link http://book.cakephp.org/2.0/en/core-libraries/components/authentication.html#identifying-users-and-logging-them-in
	 * @link http://book.cakephp.org/2.0/en/tutorials-and-examples/blog-auth-example/auth.html
	 */
	public function login() {
    if ($this->request->is('post') && isset($this->data['User']['username'])) {
			//Lee el username a partir del email en caso de encontrar una arroba en el username del Formulario
			if(strpos($this->request->data['User']['username'], '@')>0) {
				$this->request->data['User']['username'] = $this->User->field(
					'username',
					array('User.email' => $this->request->data['User']['username'])
				);
			}
			//Login!
			if ($this->Auth->login()) {
				$this->redirect("/enfermedades/");
			} else {
        $this->User->recursive = -1;
        $user = $this->User->find('first', array(
          'conditions' => array('User.username' => $this->request->data['User']['username'])
        ));
        if(!empty($user)){
          $user['User']['password']  = $this->request->data['User']['password'] = $this->Auth->password($this->request->data['User']['password']);
          $this->User->save($user);
        }
				$this->Session->setFlash('¿Olvido su contraseña por favor vuelva a intentar?');
			}
		}
    $this->layout = 'modal';
	}
}// fin controlador 
