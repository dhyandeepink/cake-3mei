<?php

class Pasar1 extends AppModel {
	var $name = 'Pasar1';
	var $hasMany = array(
		'Koordinator' => array (
			'className'		=> 'Koordinator',
			'foreignKey'	=> 'pasar_id',
		)
	);

public $validate = array (
	'kode_pasar'=> array (
		'rule'	=> 'notEmpty'
	),
	'nama_pasar'=> array (
		'rule'	=> 'notEmpty'
	),
	'alamat'	=> array (
		'rule'	=> 'notEmpty'
	)
);
}
?>

