<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\I18n\FrozenTime;
use Cake\Utility\Security;

/**
 * FileShareLinks Controller
 *
 * @property \App\Model\Table\FileShareLinksTable $FileShareLinks
 * @method \App\Model\Entity\FileShareLink[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FileShareLinksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Files'],
        ];
        $fileShareLinks = $this->paginate($this->FileShareLinks);

        $this->set(compact('fileShareLinks'));
    }

    /**
     * View method
     *
     * @param string|null $id File Share Link id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fileShareLink = $this->FileShareLinks->get($id, [
            'contain' => ['Files'],
        ]);

        $this->set(compact('fileShareLink'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->request->allowMethod('post');

        $fileShareLink = $this->FileShareLinks->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['token'] = Security::randomString(64);
            $data['expires_at'] = new FrozenTime('+15 days');

            $fileShareLink = $this->FileShareLinks->patchEntity($fileShareLink, $data);
            if ($this->FileShareLinks->save($fileShareLink)) {
                $this->Flash->success(__('The file share link has been saved.'));

                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('The file share link could not be saved. Please, try again.'));
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id File Share Link id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fileShareLink = $this->FileShareLinks->get($id);
        if ($this->FileShareLinks->delete($fileShareLink)) {
            $this->Flash->success(__('The file share link has been deleted.'));
        } else {
            $this->Flash->error(__('The file share link could not be deleted. Please, try again.'));
        }

        return $this->redirect($this->referer());
    }
}
