<?php
App::uses('AppController', 'Controller');
/**
 * HistoricoChamados Controller
 *
 * @property HistoricoChamado $HistoricoChamado
 * @property PaginatorComponent $Paginator
 */
class HistoricoChamadosController extends AppController {

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
		$this->HistoricoChamado->recursive = 0;
		$this->set('historicoChamados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HistoricoChamado->exists($id)) {
			throw new NotFoundException(__('Invalid historico chamado'));
		}
		$options = array('conditions' => array('HistoricoChamado.' . $this->HistoricoChamado->primaryKey => $id));
		$this->set('historicoChamado', $this->HistoricoChamado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HistoricoChamado->create();
			if ($this->HistoricoChamado->save($this->request->data)) {
				$this->Session->setFlash(__('The historico chamado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The historico chamado could not be saved. Please, try again.'));
			}
		}
		$chamados = $this->HistoricoChamado->Chamado->find('list');
		$usuarios = $this->HistoricoChamado->Usuario->find('list');
		$this->set(compact('chamados', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HistoricoChamado->exists($id)) {
			throw new NotFoundException(__('Invalid historico chamado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HistoricoChamado->save($this->request->data)) {
				$this->Session->setFlash(__('The historico chamado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The historico chamado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HistoricoChamado.' . $this->HistoricoChamado->primaryKey => $id));
			$this->request->data = $this->HistoricoChamado->find('first', $options);
		}
		$chamados = $this->HistoricoChamado->Chamado->find('list');
		$usuarios = $this->HistoricoChamado->Usuario->find('list');
		$this->set(compact('chamados', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HistoricoChamado->id = $id;
		if (!$this->HistoricoChamado->exists()) {
			throw new NotFoundException(__('Invalid historico chamado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HistoricoChamado->delete()) {
			$this->Session->setFlash(__('The historico chamado has been deleted.'));
		} else {
			$this->Session->setFlash(__('The historico chamado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->HistoricoChamado->recursive = 0;
		$this->set('historicoChamados', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HistoricoChamado->exists($id)) {
			throw new NotFoundException(__('Invalid historico chamado'));
		}
		$options = array('conditions' => array('HistoricoChamado.' . $this->HistoricoChamado->primaryKey => $id));
		$this->set('historicoChamado', $this->HistoricoChamado->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HistoricoChamado->create();
			if ($this->HistoricoChamado->save($this->request->data)) {
				$this->Session->setFlash(__('The historico chamado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The historico chamado could not be saved. Please, try again.'));
			}
		}
		$chamados = $this->HistoricoChamado->Chamado->find('list');
		$usuarios = $this->HistoricoChamado->Usuario->find('list');
		$this->set(compact('chamados', 'usuarios'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HistoricoChamado->exists($id)) {
			throw new NotFoundException(__('Invalid historico chamado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HistoricoChamado->save($this->request->data)) {
				$this->Session->setFlash(__('The historico chamado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The historico chamado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HistoricoChamado.' . $this->HistoricoChamado->primaryKey => $id));
			$this->request->data = $this->HistoricoChamado->find('first', $options);
		}
		$chamados = $this->HistoricoChamado->Chamado->find('list');
		$usuarios = $this->HistoricoChamado->Usuario->find('list');
		$this->set(compact('chamados', 'usuarios'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HistoricoChamado->id = $id;
		if (!$this->HistoricoChamado->exists()) {
			throw new NotFoundException(__('Invalid historico chamado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HistoricoChamado->delete()) {
			$this->Session->setFlash(__('The historico chamado has been deleted.'));
		} else {
			$this->Session->setFlash(__('The historico chamado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
