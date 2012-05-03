<?php

class Pasar extends AppModel {

    var $name = 'Pasar';
    var $hasMany = array(
        'Koordinator' => array(
            'className' => 'Koordinator',
            'foreignKey' => 'pasar_id',
//			'conditions' => array ('Pasar.kode_pasar' => 'P_1'),
        )
    );
    var $hasOne = array(
        'Barang' => array(
            'className' => 'Barang',
            'foreignKey' => 'pasar_id',
        )
    );
    public $validate = array(
        'kode_pasar' => array(
            'rule' => 'notEmpty'
        ),
        'nama_pasar' => array(
            'rule' => 'notEmpty'
        ),
        'alamat' => array(
            'rule' => 'notEmpty'
        )
    );

}
?>

