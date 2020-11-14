<?php

namespace App\Controller;

class ContactsController extends AppController {

    public function index(){
        // $this->loadComponent('Paginator');
        // $contacts = $this->Paginator->paginate($this->Contacts->find());
        $contacts = $this->paginate($this->Contacts);
        $this->set(compact('contacts'));
    }

    public function indexExt(){
        $this->loadComponent('Paginator');
        $contacts = $this->Paginator->paginate($this->Contacts->find()->contain(['Companies']));
        $this->set(compact('contacts'));
    }

    public function add(){
        $this->loadComponent('Flash');
        $contact = $this->Contacts->newEntity();
        if($this->request->is('post')){
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());

            if($this->Contacts->save($contact)){
                $this->Flash->success(__('Contact created successfully'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to save the contact'));
        }
        $this->set(['contact' => $contact, 'companies' => $this->Contacts->Companies->find('list')]);
    }
}