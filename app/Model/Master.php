<?php
class Master extends AppModel{
	var $name='Master';

	var $hasMany = array(
		'Barang' => array (
			'className'		=> 'Barang',
			'foreignKey'	=> 'master_id',
		)
	);
}

?>
