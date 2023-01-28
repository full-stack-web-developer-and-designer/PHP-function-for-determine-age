<?php

class Person {
	private $name;
	private $dob;
	
	function __construct($name, $dob) {
		$this->name = $name;
		$this->dob = $dob;	
	}
	
	public function get_name() {
		return $this->name;
	}
	
	public function get_dob() {
		return $this->dob;
	}
	
	public function get_age() {
		$dob = new Datetime($this->dob);
		$today = new Datetime(date('Y-m-d'));
		$age = $today->diff($dob);

		return $age->y;
	}
}



$mirnes = new Person('Mirnes', '1987-02-15');
$sunyoung = new Person('Sunyoung', '1965-08-24');
$sanja = new Person('Sanja', '1995-10-26');
$umberto = new Person('Umberto', '1966-04-06');
$vlado = new Person('Vlado', '1967-08-20');

echo $mirnes->get_name() . ' is '. $mirnes->get_age() . ' years old.<br>';
echo $sunyoung->get_name() . ' is '. $sunyoung->get_age() . ' years old.<br>';
echo $sanja->get_name() . ' is '. $sanja->get_age() . ' years old.<br>';
echo $umberto->get_name() . ' is '. $umberto->get_age() . ' years old.<br>';
echo $vlado->get_name() . ' is '. $vlado->get_age() . ' years old.';
