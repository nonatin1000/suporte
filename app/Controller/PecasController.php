<?php
App::uses('AppController', 'Controller');
/**
 * Pecas Controller
 *
 * @property Peca $Peca
 * @property PaginatorComponent $Paginator
 */
class PecasController extends AppController {

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
		$this->Peca->recursive = 0;
		$this->set('pecas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Peca->exists($id)) {
			throw new NotFoundException(__('Invalid peca'));
		}
		$options = array('conditions' => array('Peca.' . $this->Peca->primaryKey => $id));
		$this->set('peca', $this->Peca->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Peca->create();
			if ($this->Peca->save($this->request->data)) {
				$this->Session->setFlash(__('The peca has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The peca could not be saved. Please, try again.'));
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
		if (!$this->Peca->exists($id)) {
			throw new NotFoundException(__('Invalid peca'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Peca->save($this->request->data)) {
				$this->Session->setFlash(__('The peca has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The peca could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Peca.' . $this->Peca->primaryKey => $id));
			$this->request->data = $this->Peca->find('first', $options);
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
		$this->Peca->id = $id;
		if (!$this->Peca->exists()) {
			throw new NotFoundException(__('Invalid peca'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Peca->delete()) {
			$this->Session->setFlash(__('The peca has been deleted.'));
		} else {
			$this->Session->setFlash(__('The peca could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
