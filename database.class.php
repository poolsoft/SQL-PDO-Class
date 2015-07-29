<?php

    class database
    {
        
        protected $db_name = 'class_test';
        protected $db_user = 'root';
        protected $db_pass = '';
        protected $db_host = 'localhost';
        protected $db_options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        
        private $pdo;
        private $query;
        private $parameters;
        
		public function __construct()
		{ 			
			$this->connect();
		}
        
        protected function connect()
        {
            try
            {
                $this->settings = parse_ini_file("configuration.php");
                $settings = 'mysql:dbname='.$this->settings["dbname"].';host='.$this->settings["host"].'';
                $this->pdo = new PDO($settings, $this->settings["user"], $this->settings["password"], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            }
            catch(PDOException $ex) {
                die();
            }
        }
        
        public function query_select($query)
		{
            try
            {
                $this->query = $this->pdo->prepare($query);
                $this->success = $this->query->execute();
                $result = $this->query->fetchAll();
                return $result;
            }
            catch(PDOException $ex)
            {
                die();
            }
            $this->parameters = array();
		}
        
        public function query_insert($query, $query_params)
        {
            try
            {
                $this->query = $this->pdo->prepare($query);
                if($query_params == NULL)
                {
                    $this->success = $this->query->execute();
                }
                else
                {
                    $this->success = $this->query->execute($query_params);
                }
            }
            catch(PDOException $ex)
            {
                die();
            }
        }
        
        public function query_update($query)
        {
            try
            {
                $this->query = $this->pdo->prepare($query);
                $this->success = $this->query->execute();
            }
            catch(PDOException $ex)
            {
                die();
            }
        }
        
        public function query_delete($query)
        {
            try
            {
                $this->query = $this->pdo->prepare($query);
                $this->success = $this->query->execute();
            }
            catch(PDOException $ex)
            {
                die();
            }
        }
        
    }
    
?>
