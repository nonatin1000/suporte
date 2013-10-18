<?php
App::uses('AppController', 'Controller');
/**
 * Equipamentos Controller
 *
 * @property Equipamento $Equipamento
 * @property PaginatorComponent $Paginator
 */
class EquipamentosController extends AppController {

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
		$this->Equipamento->recursive = 0;
		$this->set('equipamentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Equipamento->exists($id)) {
			throw new NotFoundException(__('Invalid equipamento'));
		}
		$options = array('conditions' => array('Equipamento.' . $this->Equipamento->primaryKey => $id));
		$this->set('equipamento', $this->Equipamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Equipamento->create();
			if ($this->Equipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The equipamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipamento could not be saved. Please, try again.'));
			}
		}
		$marcas = $this->Equipamento->Marca->find('list');
		$this->set(compact('marcas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Equipamento->exists($id)) {
			throw new NotFoundException(__('Invalid equipamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Equipamento->save($this->request->data)) {
				$this->Session->setFlash(__('The equipamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Equipamento.' . $this->Equipamento->primaryKey => $id));
			$this->request->data = $this->Equipamento->find('first', $options);
		}
		$marcas = $this->Equipamento->Marca->find('list');
		$this->set(compact('marcas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Equipamento->id = $id;
		if (!$this->Equipamento->exists()) {
			throw new NotFoundException(__('Invalid equipamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Equipamento->delete()) {
			$this->Session->setFlash(__('The equipamento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The equipamento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
