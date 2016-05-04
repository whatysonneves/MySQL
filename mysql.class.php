<?php

/**
* MySQL
*
* @package MySQL
* @author Whatyson Neves <whatyson@promasters.net.br>
* @version 1.0
* @link https://github.com/whatysonneves/MySQL
*
*/

class MySQL {

	// atributos
	public $host = "127.0.0.1";
	public $port = "3306";
	public $user = "root";
	public $pass;
	protected $conn;
	protected $lastQuery = false;

	// métodos primários
	public function connect() {
		$a = mysql_connect($this->host.":".$this->port, $this->user, $this->pass);
		if($a) {
			$this->conn = $a;
			return true;
		} else {
			$this->conn = mysql_error();
			return false;
		}
	}

	public function close() {
		return mysql_close($this->conn);
	}

	public function db($a) {
		return mysql_select_db($a, $this->conn);
	}

	public function query($a) {
		if(!empty($a)) {
			$this->lastQuery = mysql_query($a, $this->conn);
		}
		return $this->lastQuery;
	}

	// métodos secundários
	public function fetch($a = null) {
		if(empty($a)) {
			$a = $this->lastQuery;
		}
		return mysql_fetch_array($a);
	}

	public function count($a = null) {
		if(empty($a)) {
			$a = $this->lastQuery;
		}
		return mysql_num_rows($a);
	}
}
