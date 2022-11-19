<?php

namespace Entity;

class Project extends BaseProject {
	
	static $INDEX = 1;
	const FIRST_INDEX = 1;
	
	protected $tasks = [];
	
	
	public function __construct($name) {
		
		$this->id = self::$INDEX;
		$this->name = $name;
		
		self::$INDEX++;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function getName() {
		return $this->name;
	}	
	
	public function addTask($name, $dueDate = null) {
		$this->tasks[] = new Task ($name, $dueDate);
	}
	
	public static function getCurrentIndex() {
		return self::$INDEX;
	}
			
}


