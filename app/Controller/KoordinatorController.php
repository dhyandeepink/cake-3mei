<?php

class KoordinatorController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Session');

    public function index() {
        $this->set('koordinators', $this->Koordinator->find('all'));
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Koordinator->save($this->request->data)) {
                $this->Session->setFlash('data saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('data failed to save');
            }
        }
        $pasar = $this->Koordinator->Pasar->find('list', array('fields' => array('Pasar.id', 'Pasar.nama_pasar')));
        $this->set(compact('pasar'));
    }

    public function edit($id=null) {
        $this->Koordinator->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Koordinator->read();
        } else {

            if ($this->Koordinator->save($this->request->data)) {
                $this->Session->setFlash('data has updated');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('data failed to update');
            }
        }
        $pasar = $this->Koordinator->Pasar->find('list', array('fields' => array('Pasar.id', 'Pasar.nama_pasar')));
        $this->set(compact('pasar'));
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Koordinator->delete($id)) {
            $this->Session->setFlash('data deleted');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
