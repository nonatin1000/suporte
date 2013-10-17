<?php
App::uses('AppController', 'Controller');
/**
 * ItemServicos Controller
 *
 * @property ItemServico $ItemServico
 * @property PaginatorComponent $Paginator
 */
class ItemServicosController extends AppController {

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
		$this->ItemServico->recursive = 0;
		$this->set('itemServicos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemServico->exists($id)) {
			throw new NotFoundException(__('Invalid item servico'));
		}
		$options = array('conditions' => array('ItemServico.' . $this->ItemServico->primaryKey => $id));
		$this->set('itemServico', $this->ItemServico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemServico->create();
			if ($this->ItemServico->save($this->request->data)) {
				$this->Session->setFlash(__('The item servico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item servico could not be saved. Please, try again.'));
			}
		}
		$pecas = $this->ItemServico->Peca->find('list');
		$servicos = $this->ItemServico->Servico->find('list');
		$this->set(compact('pecas', 'servicos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemServico->exists($id)) {
			throw new NotFoundException(__('Invalid item servico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemServico->save($this->request->data)) {
				$this->Session->setFlash(__('The item servico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item servico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemServico.' . $this->ItemServico->primaryKey => $id));
			$this->request->data = $this->ItemServico->find('first', $options);
		}
		$pecas = $this->ItemServico->Peca->find('list');
		$servicos = $this->ItemServico->Servico->find('list');
		$this->set(compact('pecas', 'servicos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemServico->id = $id;
		if (!$this->ItemServico->exists()) {
			throw new NotFoundException(__('Invalid item servico'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemServico->delete()) {
			$this->Session->setFlash(__('The item servico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The item servico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ItemServico->recursive = 0;
		$this->set('itemServicos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ItemServico->exists($id)) {
			throw new NotFoundException(__('Invalid item servico'));
		}
		$options = array('conditions' => array('ItemServico.' . $this->ItemServico->primaryKey => $id));
		$this->set('itemServico', $this->ItemServico->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ItemServico->create();
			if ($this->ItemServico->save($this->request->data)) {
				$this->Session->setFlash(__('The item servico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item servico could not be saved. Please, try again.'));
			}
		}
		$pecas = $this->ItemServico->Peca->find('list');
		$servicos = $this->ItemServico->Servico->find('list');
		$this->set(compact('pecas', 'servicos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ItemServico->exists($id)) {
			throw new NotFoundException(__('Invalid item servico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemServico->save($this->request->data)) {
				$this->Session->setFlash(__('The item servico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item servico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemServico.' . $this->ItemServico->primaryKey => $id));
			$this->request->data = $this->ItemServico->find('first', $options);
		}
		$pecas = $this->ItemServico->Peca->find('list');
		$servicos = $this->ItemServico->Servico->find('list');
		$this->set(compact('pecas', 'servicos'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ItemServico->id = $id;
		if (!$this->ItemServico->exists()) {
			throw new NotFoundException(__('Invalid item servico'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemServico->delete()) {
			$this->Session->setFlash(__('The item servico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The item servico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
