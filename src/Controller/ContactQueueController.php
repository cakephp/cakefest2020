<?php

namespace App\Controller;

use Cake\Core\Configure;
use Tools\Form\ContactForm;
use Tools\Mailer\Mailer;

/**
 * @property \Queue\Model\Table\QueuedJobsTable $QueuedJobs
 */
class ContactQueueController extends AppController {

	/**
	 * @return void
	 */
	public function initialize(): void {
		parent::initialize();

		if (Configure::read('debug')) {
			return;
		}

		$this->loadComponent('Security');
	}

	/**
	 * @return void
	 */
	public function index() {
		$contact = new ContactForm();

		if ($this->request->is('post')) {
			$name = $this->request->getData('name');
			$email = $this->request->getData('email');
			$subject = $this->request->getData('subject');
			$message = $this->request->getData('body');

			if ($contact->execute($this->request->getData())) {
				$this->_send($name, $email, $subject, $message);
			} else {
				$this->Flash->error(__('formContainsErrors'));
			}
		} else {
			// prepopulate form
			$data = (array)$this->request->getQuery();

			# try to autofill fields
			$user = (array)$this->request->getSession()->read('Auth.User');
			if (!empty($user['email'])) {
				$data['email'] = $user['email'];
			}
			if (!empty($user['username'])) {
				$data['name'] = $user['username'];
			}

			$this->request = $this->request->withParsedBody($data);
		}

		$this->set(compact('contact'));
	}

	/**
	 * @param string $fromName
	 * @param string $fromEmail
	 * @param string $subject
	 * @param string $message
	 *
	 * @return \Cake\Http\Response|null
	 */
	protected function _send($fromName, $fromEmail, $subject, $message) {
		$adminEmail = Configure::read('Config.adminEmail');

		$this->loadModel('Queue.QueuedJobs');
        $data = [
            'settings' => [
                'to' => $adminEmail,
                'from' => Configure::read('Config.systemEmail') ?: $adminEmail,
                'subject' => Configure::read('Config.pageName') . ' - ' . __('contact via form'),
                'template' => 'contact',
            ],
            'vars' => compact('message', 'subject', 'fromEmail', 'fromName'),
            'content' => '',
        ];
        $config = [
            'priority' => 8,
        ];
		$this->QueuedJobs->createJob('Email', $data, $config);

		$this->Flash->success(__('contactSuccessfullySent {0}', $fromEmail));

		return $this->redirect(['action' => 'index']);
	}

}
