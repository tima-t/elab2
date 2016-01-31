<?php

/**
 * This is an example of User Class using PDO
 *
 */

namespace models;
use lib\Core;
use PDO;

class User {
	private $salt;
	private $core;

	function __construct() {
		$this->core = Core::getInstance();
		$this->salt="tima";
		//$this->core->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	



	// Get user by the Login
	public function getUserByLogin($name, $pass) {

		$pass = md5($this->salt.$pass.$this->salt);
		$stmt = $this->core->dbh->prepare("SELECT * FROM users WHERE name=? AND pass=?");
		$result = $stmt->execute(array($name,$pass));
		$row_count = $stmt->rowCount();
		if($row_count == 1){
			return true;
		}
		else{
			return false;
		}
		
		
		
	}

	// Insert a new user
	public function setUser($name,$pass,$mail) {
		try {
			$pass = md5($this->salt.$pass.$this->salt);
			$stmt =$this->core->dbh->prepare("INSERT INTO users (name,  pass, email)
					VALUES (?,?,?)");
			$stmt->execute(array($name,$pass,$mail));
			return true;

		} catch(PDOException $e) {
        	return false;
    	}
		
	}





}