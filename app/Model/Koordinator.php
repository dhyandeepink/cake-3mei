<?php
class Koordinator extends AppModel{
	var $name='Koordinator';
	
	var $belongsTo = array(
		'Pasar' => array (
			'className'		=> 'Pasar',
			'foreignKey'	=> 'pasar_id',
		)
	);

	var $belongsTo = array(
		'User' => array (
			'className'		=> 'User',
			'foreignKey'	=> 'koordinator_id',
		)
	);

	public $validate = array (
		'kode_koordinator'=> array (
		'rule'	=> 'notEmpty',
		'message' => 'Bagian ini tidak boleh kosong'
	),
		'nama'=> array (
		'rule'	=> 'notEmpty'
	),
		'no_hp'	=> array (
		'rule'	=> 'notEmpty'
	),
		'pasar_id' => array (
		'rule' => 'notEmpty'
	)
);
}
?>
