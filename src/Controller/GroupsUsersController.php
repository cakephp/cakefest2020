<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * GroupsUsers Controller
 *
 * @property \App\Model\Table\GroupsUsersTable $GroupsUsers
 * @method \App\Model\Entity\GroupsUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GroupsUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups', 'Users'],
        ];
        $groupsUsers = $this->paginate($this->GroupsUsers);

        $this->set(compact('groupsUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Groups User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $groupsUser = $this->GroupsUsers->get($id, [
            'contain' => ['Groups', 'Users'],
        ]);

        $this->set(compact('groupsUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $groupsUser = $this->GroupsUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $groupsUser = $this->GroupsUsers->patchEntity($groupsUser, $this->request->getData());
            if ($this->GroupsUsers->save($groupsUser)) {
                $this->Flash->success(__('The groups user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The groups user could not be saved. Please, try again.'));
        }
        $groups = $this->GroupsUsers->Groups->find('list', ['limit' => 200]);
        $users = $this->GroupsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('groupsUser', 'groups', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Groups User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $groupsUser = $this->GroupsUsers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $groupsUser = $this->GroupsUsers->patchEntity($groupsUser, $this->request->getData());
            if ($this->GroupsUsers->save($groupsUser)) {
                $this->Flash->success(__('The groups user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The groups user could not be saved. Please, try again.'));
        }
        $groups = $this->GroupsUsers->Groups->find('list', ['limit' => 200]);
        $users = $this->GroupsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('groupsUser', 'groups', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Groups User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $groupsUser = $this->GroupsUsers->get($id);
        if ($this->GroupsUsers->delete($groupsUser)) {
            $this->Flash->success(__('The groups user has been deleted.'));
        } else {
            $this->Flash->error(__('The groups user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
