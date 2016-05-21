<?php

    class Database {

        protected $dbName = 'class_test';
        protected $dbUser = 'root';
        protected $dbPass = '';
        protected $dbHost = 'localhost';
        
        protected $dbOptions = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        
        private $pdo;
        private $query;
        private $parameters;
        
        public function __construct() {
        	$this->connect();
        }
        
        protected function connect() {
        	try {
        		$settings = 'mysql:dbname='.$this->dbName.';host='.$this->dbHost.'';
        		$this->pdo = new PDO($settings, $this->dbUser, $this->dbPass, $this->dbOptions);
        	} atch(PDOException $ex) {
        		die();
        	}
        }
        
        public function query_select($query) {
        	try {
        		$this->query = $this->pdo->prepare($query);
        		$this->success = $this->query->execute();
        		$result = $this->query->fetchAll();
        		return $result;
        	} catch(PDOException $ex) {
        		die();
        	}
        	
        	$this->parameters = array();
        }
        
        public function query_insert($query, $query_params) {
        	try {
        		$this->query = $this->pdo->prepare($query);
        		if($query_params == NULL) {
        			$this->success = $this->query->execute();
        		} else {
        			$this->success = $this->query->execute($query_params);
        		}
        	} catch(PDOException $ex) {
        		die();
        	}
        }
        
        public function query_update($query) {
        	try {
        		$this->query = $this->pdo->prepare($query);
        		$this->success = $this->query->execute();
        	} catch(PDOException $ex) {
        		die();
        	}
        }
        
        public function query_delete($query) {
        	try {
        		$this->query = $this->pdo->prepare($query);
        		$this->success = $this->query->execute();
        	} catch(PDOException $ex) {
        		die();
        	}
        }
    }
    
?>
