<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Piz Controller
 *
 * @property \App\Model\Table\PizTable $Piz
 * @method \App\Model\Entity\Piz[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PizController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $piz = $this->paginate($this->Piz);

        $this->set(compact('piz'));
    }

    /**
     * View method
     *
     * @param string|null $id Piz id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $piz = $this->Piz->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('piz'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $piz = $this->Piz->newEmptyEntity();
        if ($this->request->is('post')) {
            $piz = $this->Piz->patchEntity($piz, $this->request->getData());
            if ($this->Piz->save($piz)) {
                $this->Flash->success(__('The piz has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The piz could not be saved. Please, try again.'));
        }
        $this->set(compact('piz'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Piz id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $piz = $this->Piz->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $piz = $this->Piz->patchEntity($piz, $this->request->getData());
            if ($this->Piz->save($piz)) {
                $this->Flash->success(__('The piz has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The piz could not be saved. Please, try again.'));
        }
        $this->set(compact('piz'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Piz id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $piz = $this->Piz->get($id);
        if ($this->Piz->delete($piz)) {
            $this->Flash->success(__('The piz has been deleted.'));
        } else {
            $this->Flash->error(__('The piz could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
