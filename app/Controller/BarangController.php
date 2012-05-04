<?php

class BarangController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Session');

    public function index() {
        $this->set('barangs', $this->Barang->find('all'));
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Barang->save($this->request->data)) {
                $this->Session->setFlash('data saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('data failed to save');
            }
        }
        $pasar = $this->Barang->Pasar->find('list', array('fields' => array('Pasar.id', 'Pasar.nama_pasar')));
        $this->set(compact('pasar'));

        $master = $this->Barang->Master->find('list', array('fields' => array('Master.id', 'Master.nama_barang')));
        $this->set(compact('master'));
    }

    public function edit($id = null) {
        $this->Barang->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Barang->read();
        } else {

            if ($this->Barang->save($this->request->data)) {
                $this->Session->setFlash('data has updated');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('data failed to update');
            }
            $pasar = $this->Barang->Pasar->find('list', array('fields' => array('Pasar.id', 'Pasar.nama_pasar')));
            $this->set(compact('pasar'));
            $master = $this->Barang->Master->find('list', array('fields' => array('Master.id', 'Master.nama_barang')));
            $this->set(compact('master'));
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Barang->delete($id)) {
            $this->Session->setFlash('data deleted');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
