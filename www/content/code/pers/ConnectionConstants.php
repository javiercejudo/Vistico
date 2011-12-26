<?php
/**
 * ConnectionConstants initialises all constants required to connect
 * the application to the DB. It uses the file properties.ini.php
 * @author Javier Cejudo
 * @version 1.0
 */
class ConnectionConstants {
	public $URL;
	public $USER;
	public $PWD;
	public $DB_NAME;
	
	/**
	 * Constructs an object containing the connection constants
	 * as retrieved from ./properties.ini.php
	 */
	function __construct(){
		$properties_url  = "properties.ini.php";
		$properties      = parse_ini_file($properties_url);
		
		$this->URL      = $properties['URL'];
		$this->USER     = $properties['USER'];
		$this->PWD      = $properties['PWD'];
		$this->DB_NAME  = $properties['DB_NAME'];
	}
}
?>
