<?php
App::uses('AppController', 'Controller');
/**
 * Prioridades Controller
 *
 * @property Prioridade $Prioridade
 * @property PaginatorComponent $Paginator
 */
class PrioridadesController extends AppController {

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
		$this->Prioridade->recursive = 0;
		$this->set('prioridades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Prioridade->exists($id)) {
			throw new NotFoundException(__('Invalid prioridade'));
		}
		$options = array('conditions' => array('Prioridade.' . $this->Prioridade->primaryKey => $id));
		$this->set('prioridade', $this->Prioridade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Prioridade->create();
			if ($this->Prioridade->save($this->request->data)) {
				$this->Session->setFlash(__('The prioridade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prioridade could not be saved. Please, try again.'));
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
		if (!$this->Prioridade->exists($id)) {
			throw new NotFoundException(__('Invalid prioridade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Prioridade->save($this->request->data)) {
				$this->Session->setFlash(__('The prioridade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prioridade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Prioridade.' . $this->Prioridade->primaryKey => $id));
			$this->request->data = $this->Prioridade->find('first', $options);
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
		$this->Prioridade->id = $id;
		if (!$this->Prioridade->exists()) {
			throw new NotFoundException(__('Invalid prioridade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Prioridade->delete()) {
			$this->Session->setFlash(__('The prioridade has been deleted.'));
		} else {
			$this->Session->setFlash(__('The prioridade could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
