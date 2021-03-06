<?php
App::uses('AppController', 'Controller');
/**
 * Chamados Controller
 *
 * @property Chamado $Chamado
 * @property PaginatorComponent $Paginator
 */
class ChamadosController extends AppController {

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
		$this->Chamado->recursive = 0;
		$this->set('chamados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Chamado->exists($id)) {
			throw new NotFoundException(__('Invalid chamado'));
		}
		$options = array('conditions' => array('Chamado.' . $this->Chamado->primaryKey => $id));
		$this->set('chamado', $this->Chamado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Chamado->create();
			if ($this->Chamado->save($this->request->data)) {
				$this->Session->setFlash(__('The chamado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chamado could not be saved. Please, try again.'));
			}
		}
		$funcionarios = $this->Chamado->Funcionario->find('list');
		$prioridades = $this->Chamado->Prioridade->find('list');
		$this->set(compact('funcionarios', 'prioridades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Chamado->exists($id)) {
			throw new NotFoundException(__('Invalid chamado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Chamado->save($this->request->data)) {
				$this->Session->setFlash(__('The chamado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chamado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Chamado.' . $this->Chamado->primaryKey => $id));
			$this->request->data = $this->Chamado->find('first', $options);
		}
		$funcionarios = $this->Chamado->Funcionario->find('list');
		$prioridades = $this->Chamado->Prioridade->find('list');
		$this->set(compact('funcionarios', 'prioridades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Chamado->id = $id;
		if (!$this->Chamado->exists()) {
			throw new NotFoundException(__('Invalid chamado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Chamado->delete()) {
			$this->Session->setFlash(__('The chamado has been deleted.'));
		} else {
			$this->Session->setFlash(__('The chamado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
