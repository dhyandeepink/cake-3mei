<?php

class UserController extends AppController {

    public $components = array('Session');
    public $helpers = array('Form', 'Html');
    var $name = 'User';

//    public function beforeFilter() {
//        parent::beforeFilter();
//        $this->Auth->allow('view');
//    }
//    public function isAuthorized($user) {
//        if ($user['level'] == 'admin') {
//            return true;
//        }
//        if (in_array($this->action, array('edit', 'delete'))) {
//            if ($user['id'] != $this->request->params['pass'][0]) {
//                return false;
//            }
//        }
//        return true;
//    }
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash('Periksa kembali username dan email anda.');
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function index() {
//        $this->User->reqursive = 0;
        $this->set('users', $this->User->find('all'));
    }

    public function view($id = null) {
        $this->User->id = $id;

        if (!$this->User->exists()) {
            throw new NotFoundException('Invalid user');
        }

        if (!$id) {
            $this->Session->setFlash('Invalid user');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('user', $this->User->read());
    }

    public function add() {
        if ($this->request->is('post')) {
//            $input_u = array(
//                'username' => $this->request->data['User']['username'],
//                'level' => $this->request->data['User']['level'],
//                'nama' => $this->request->data['User']['nama'],
//                'password' => $this->request->data['User']['password']
//            );
            $input = array(
                'username' => $this->request->data['User']['username'],
                'level' => $this->request->data['User']['level'],
                'nama' => $this->request->data['User']['nama'],
                'password' => $this->request->data['User']['password'],
                'kode_koordinator' => $this->request->data['Koordinator']['kode_koordinator'],
                'no_hp' => $this->request->data['Koordinator']['no_hp'],
                'pasar_id' => $this->request->data['Koordinator']['pasar_id']
            );

            if ($this->User->save($input)) {
                $this->Session->setFlash('The user has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('User tidak dapat ditambahkan. Coba sekali lagi.');
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;

        if (!$this->User->exists()) {
            throw new NotFoundException('Invalid user');
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('The user has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('User tidak dapat diupdate. Coba sekali lagi.');
            }
        } else {
            $this->request->data = $this->User->read();
        }
    }

    public function delete($id = null) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if (!$id) {
            $this->Session->setFlash('Invalid id for user');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->User->delete($id)) {
            $this->Session->setFlash('User berhasil dihapus.');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('User gagal dihapus.');
        $this->redirect(array('action' => 'index'));
    }

}

?>
