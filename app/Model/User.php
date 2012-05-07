<?php
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {

    public $name = 'User';
//    var $hasOne = array(
//        'Koordinator' => array(
//            'className' => 'Koordinator',
//            'foreignKey' => 'koordinator_id',
//        )
//    );
    public $displayField = 'nama';
    public $validate = array(
        'nama' => array(
            'Tolong masukan nama anda.' => array(
                'rule' => 'notEmpty',
                'message' => 'Masukan nama anda.'
            )
        ),
        'username' => array(
            'Minimal karakter 5 - 15' => array(
                'rule' => array('between', 5, 15),
                'message' => 'Minimal karakter 5 - 15.'
            ),
            'Username sudah terdaftar' => array(
                'rule' => 'isUnique',
                'message' => 'Username sudah terdaftar.'
            )
        ),
        'password' => array(
            'Not empty' => array(
                'rule' => 'notEmpty',
                'message' => 'Masukan password anda.'
            )
        )
    );

    public function beforeSave() {
        if (isset($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        }
        return true;
    }

}

?>