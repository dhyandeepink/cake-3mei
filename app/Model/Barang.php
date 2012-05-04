<?php

class Barang extends AppModel {

    var $name = 'Barang';
    var $belongsTo = array(
        'Master' => array(
            'className' => 'Master',
            'foreignKey' => 'master_id'
        ),
        'Pasar' => array(
            'className' => 'Pasar',
            'foreignKey' => 'pasar_id'
        )
    );

    public $validate = array(
        'kode_barang' => array(
            'rule' => 'notEmpty'
        ),
        'harga' => array(
            'rule' => 'numeric',
            'message' => 'Masuk harga yang benar'
        ),
        'pasar_id' => array(
            'rule' => 'notEmpty'
        )
    );

}

?>
