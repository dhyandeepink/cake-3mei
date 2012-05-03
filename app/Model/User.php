<?php
class User extends AppModel{
	public $name= 'User';

	var $hasOne = array(
		'Koordinator' => array (
			'className'		=> 'Koordinator',
			'foreignKey'	=> 'koordinator_id',
		)
	);

	public $validate = array(
	'koordinator_id'=> array (
		'rule'	=> 'notEmpty'
	),
	'username'=> array (
		'rule'	=> 'notEmpty'
	),
	'password'	=> array (
		'rule'	=> 'notEmpty'
	),
	'level' => array (
		'rule' => 'notEmpty'
	)
	);
}
?>