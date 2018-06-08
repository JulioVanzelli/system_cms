<?php

namespace Database;

class Connection {

	private static $instance;

	public static function openConnection(){

		if(isset(self::$instance)){
			return self::$instance;
		}

		try {
			self::$instance = new \PDO(
				$GLOBALS['conn']['driver'].':host='.$GLOBALS['conn']['host'].';dbname='.$GLOBALS['conn']['dbname'], 
				$GLOBALS['conn']['user'], 
				$GLOBALS['conn']['password']
			);
			self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			self::$instance->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
		} catch(PDOException $e) {
		    echo 'ERROR: ' . $e->getMessage();
		}

		return  self::$instance;
	}
	
}