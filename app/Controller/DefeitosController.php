<?php
App::uses('AppController', 'Controller');
/**
 * Defeitos Controller
 *
 * @property Defeito $Defeito
 * @property PaginatorComponent $Paginator
 */
class DefeitosController extends AppController {

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
		$this->Defeito->recursive = 0;
		$this->set('defeitos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Defeito->exists($id)) {
			throw new NotFoundException(__('Invalid defeito'));
		}
		$options = array('conditions' => array('Defeito.' . $this->Defeito->primaryKey => $id));
		$this->set('defeito', $this->Defeito->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Defeito->create();
			if ($this->Defeito->save($this->request->data)) {
				$this->Session->setFlash(__('The defeito has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The defeito could not be saved. Please, try again.'));
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
		if (!$this->Defeito->exists($id)) {
			throw new NotFoundException(__('Invalid defeito'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Defeito->save($this->request->data)) {
				$this->Session->setFlash(__('The defeito has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The defeito could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Defeito.' . $this->Defeito->primaryKey => $id));
			$this->request->data = $this->Defeito->find('first', $options);
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
		$this->Defeito->id = $id;
		if (!$this->Defeito->exists()) {
			throw new NotFoundException(__('Invalid defeito'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Defeito->delete()) {
			$this->Session->setFlash(__('The defeito has been deleted.'));
		} else {
			$this->Session->setFlash(__('The defeito could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
