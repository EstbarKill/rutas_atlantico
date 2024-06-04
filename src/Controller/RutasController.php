<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Rutas Controller
 *
 * @property \App\Model\Table\RutasTable $Rutas
 */
class RutasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $query = $this->Rutas->find();
        $rutas = $this->paginate($query);

        $this->set(compact('rutas'));
    }

    public function inicio()
    {
        $rutas = $this->Rutas->find('all')->toArray();

        $this->set(compact('rutas'));
    }

    /**
     * View method
     *
     * @param string|null $id Ruta id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ruta = $this->Rutas->get($id, contain: []);
        $this->set(compact('ruta'));

        $estado = $this->Rutas->get($id, contain: []);
        $this->set(compact('ruta'));
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ruta = $this->Rutas->newEmptyEntity();
        if ($this->request->is('post')) {
            $ruta = $this->Rutas->patchEntity($ruta, $this->request->getData());
            if ($this->Rutas->save($ruta)) {
                $this->Flash->success(__('The ruta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ruta could not be saved. Please, try again.'));
        }
        $this->set(compact('ruta'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ruta id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ruta = $this->Rutas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ruta = $this->Rutas->patchEntity($ruta, $this->request->getData());
            if ($this->Rutas->save($ruta)) {
                $this->Flash->success(__('The ruta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ruta could not be saved. Please, try again.'));
        }
        $this->set(compact('ruta'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ruta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ruta = $this->Rutas->get($id);
        if ($this->Rutas->delete($ruta)) {
            $this->Flash->success(__('The ruta has been deleted.'));
        } else {
            $this->Flash->error(__('The ruta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
