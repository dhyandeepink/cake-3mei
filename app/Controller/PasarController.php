<?php

class PasarController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Session');

    public function index() {
        $this->set('pasars', $this->Pasar->find('all'));
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Pasar->save($this->request->data)) {
                $this->Session->setFlash('data saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('data failed to save');
            }
        }
    }

    public function edit($id = null) {
        $this->Pasar->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Pasar->read();
            $this->set('pasar',$this->Pasar->read());
        } else {

            if ($this->Pasar->save($this->request->data)) {
                $this->Session->setFlash('data has updated');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('data failed to update');
            }
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Pasar->delete($id)) {
            $this->Session->setFlash('Pasar berhasil dihapus.');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function tes() {

        echo "jijkjkj";
    }

}

?>
