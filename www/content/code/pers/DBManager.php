<?php
include_once('ConnectionManager.php');
include_once(model.'Project.php');

/**
 * DBManager handles the communication with the DB
 * @author Javier Cejudo
 * @version 1.0
 */
class DBManager {
	/**
	 * Adds a project to the database from an instance of an object
	 * Project.
	 */
	public function addProject($pro){
		$DB = ConnectionManager::getConnection();
		$str = "INSERT INTO Project (short_name,full_name,manager_id,
			start_date,end_date) VALUES ('" . $pro->get_short_name() . 
			"','" . $pro->get_full_name() . "','" . $pro->get_manager_id() .
			"','" . $pro->get_start_date() . "','" . $pro->get_end_date() . 
			"')";
		$rs = $DB->Execute($str);
	}
	/**
	 * Adds an employee to the database from an instance of an object
	 * Employee.
	 */
	public function addEmployee($emp){
		$DB = ConnectionManager::getConnection();
		$str = "INSERT INTO Employee (first_name,last_name,client_id) 
			VALUES ('" . $emp->get_first_name() . "','" . 
			$emp->get_last_name() . "','" . 
			$emp->get_client_id() . "')";
		$rs = $DB->Execute($str);
	}
}
?>
