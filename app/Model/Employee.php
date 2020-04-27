<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {

	public $validate = array('nazwisko'=> array('rule'=>'notBlank'),
			'etat'=>array('rule'=>'notBlank'),
		'placa_pod'=>array('rule'=>'isBetween'));

	public function isBetween($value){
		return (0<=$value)&&($value<=2000);
	}

}
