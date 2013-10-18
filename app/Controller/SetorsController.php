<?php
App::uses('AppController', 'Controller');
/**
 * Setors Controller
 *
 * @property Setor $Setor
 * @property PaginatorComponent $Paginator
 */
class SetorsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Setor->recursive = 0;
		$this->set('setors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Setor->exists($id)) {
			throw new NotFoundException(__('Invalid setor'));
		}
		$options = array('conditions' => array('Setor.' . $this->Setor->primaryKey => $id));
		$this->set('setor', $this->Setor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Setor->create();
			if ($this->Setor->save($this->request->data)) {
				$this->Session->setFlash(__('The setor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setor could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Setor->exists($id)) {
			throw new NotFoundException(__('Invalid setor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Setor->save($this->request->data)) {
				$this->Session->setFlash(__('The setor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Setor.' . $this->Setor->primaryKey => $id));
			$this->request->data = $this->Setor->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Setor->id = $id;
		if (!$this->Setor->exists()) {
			throw new NotFoundException(__('Invalid setor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Setor->delete()) {
			$this->Session->setFlash(__('The setor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The setor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
