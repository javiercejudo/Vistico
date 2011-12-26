<?php
include_once(lib.'adodb5/adodb.inc.php');
include_once('ConnectionConstants.php');

/**
 * ConnectionManager handles the connection with the database.
 * It initialises the appropriate driver: in this case, mysql.
 * @author Javier Cejudo
 * @version 1.0
 */
class ConnectionManager {
	/**
	 * Creates and returns the object that will be used to access the 
	 * database/s
	 */
	public function getConnection() {
		$constants = new ConnectionConstants();
		$DB = NewADOConnection('mysql');
		$DB->Connect($constants->URL, 
			$constants->USER, 
			$constants->PWD, 
			$constants->DB_NAME);
		return $DB;
	}
}
?>
