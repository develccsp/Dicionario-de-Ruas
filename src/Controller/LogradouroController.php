<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Logradouro Controller
 *
 * @property \App\Model\Table\LogradouroTable $Logradouro
 */
class LogradouroController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $logradouro = $this->paginate($this->Logradouro);

        $this->set(compact('logradouro'));
        $this->set('_serialize', ['logradouro']);
    }

    /**
     * View method
     *
     * @param string|null $id Logradouro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $logradouro = $this->Logradouro->get($id, [
            'contain' => []
        ]);

        $this->set('logradouro', $logradouro);
        $this->set('_serialize', ['logradouro']);

         // Controller do search!
       if(isset($this->params['url']['search'])){  
         echo 'search text has been found';
        }


    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $logradouro = $this->Logradouro->newEntity();
        if ($this->request->is('post')) {
            $logradouro = $this->Logradouro->patchEntity($logradouro, $this->request->data);
            if ($this->Logradouro->save($logradouro)) {
                $this->Flash->success(__('The logradouro has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The logradouro could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('logradouro'));
        $this->set('_serialize', ['logradouro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Logradouro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $logradouro = $this->Logradouro->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $logradouro = $this->Logradouro->patchEntity($logradouro, $this->request->data);
            if ($this->Logradouro->save($logradouro)) {
                $this->Flash->success(__('The logradouro has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The logradouro could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('logradouro'));
        $this->set('_serialize', ['logradouro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Logradouro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $logradouro = $this->Logradouro->get($id);
        if ($this->Logradouro->delete($logradouro)) {
            $this->Flash->success(__('The logradouro has been deleted.'));
        } else {
            $this->Flash->error(__('The logradouro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
               
}
