<?php
App::uses('AppController', 'Controller');
/**
 * TipoServicos Controller
 *
 * @property TipoServico $TipoServico
 * @property PaginatorComponent $Paginator
 */
class TipoServicosController extends AppController {

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
		$this->TipoServico->recursive = 0;
		$this->set('tipoServicos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoServico->exists($id)) {
			throw new NotFoundException(__('Invalid tipo servico'));
		}
		$options = array('conditions' => array('TipoServico.' . $this->TipoServico->primaryKey => $id));
		$this->set('tipoServico', $this->TipoServico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoServico->create();
			if ($this->TipoServico->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo servico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo servico could not be saved. Please, try again.'));
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
		if (!$this->TipoServico->exists($id)) {
			throw new NotFoundException(__('Invalid tipo servico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoServico->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo servico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo servico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoServico.' . $this->TipoServico->primaryKey => $id));
			$this->request->data = $this->TipoServico->find('first', $options);
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
		$this->TipoServico->id = $id;
		if (!$this->TipoServico->exists()) {
			throw new NotFoundException(__('Invalid tipo servico'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TipoServico->delete()) {
			$this->Session->setFlash(__('The tipo servico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo servico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
