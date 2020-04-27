<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {

	public $validate = array(
		'nazwisko'=> array('rule'=>'notBlank'),
		'etat'=>array('rule'=>'notBlank'),
		'placa_pod'=> array(
        	'rule' => array('range', 0, 2000),
        	'message' => 'Please enter a number between -1 and 11'
    	)
	);

}
