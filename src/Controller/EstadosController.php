<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Estados Controller
 *
 * @property \App\Model\Table\EstadosTable $Estados
 */
class EstadosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Estados->find();
        $estados = $this->paginate($query);

        $this->set(compact('estados'));
    }

    /**
     * View method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estado = $this->Estados->get($id, contain: []);
        $this->set(compact('estado'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estado = $this->Estados->newEmptyEntity();
        if ($this->request->is('post')) {
            $estado = $this->Estados->patchEntity($estado, $this->request->getData());
            if ($this->Estados->save($estado)) {
                $this->Flash->success(__('The estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estado could not be saved. Please, try again.'));
        }
        $this->set(compact('estado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estado = $this->Estados->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estado = $this->Estados->patchEntity($estado, $this->request->getData());
            if ($this->Estados->save($estado)) {
                $this->Flash->success(__('The estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estado could not be saved. Please, try again.'));
        }
        $this->set(compact('estado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estado = $this->Estados->get($id);
        if ($this->Estados->delete($estado)) {
            $this->Flash->success(__('The estado has been deleted.'));
        } else {
            $this->Flash->error(__('The estado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
