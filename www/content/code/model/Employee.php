<?php
/**
 * Instances of this class represent each employee for all clients
 * @author Javier Cejudo
 * @version 1.0
 */
class Employee {
	private $first_name;
	private $last_name;
	private $client_id;

	/**
	 * Constructs an object Employee only from their full name
	 * @param first_name
	 * @param last_name
	 */
	function __construct($first_name, $last_name){
		$this->set_first_name($first_name);
		$this->set_last_name($last_name);
	}
	
	/*
	 * Sets the first name of the employee
	 */
	public function set_first_name($first_name){
		$this->first_name = $first_name;
	}
	
	/*
	 * Returns the first name of the employee
	 */
	public function get_first_name(){
		return $this->first_name;
	}
	
	/*
	 * Sets the last name of the employee
	 */
	public function set_last_name($last_name){
		$this->last_name = $last_name;
	}
	
	/*
	 * Returns the last name of the employee
	 */
	public function get_last_name(){
		return $this->last_name;
	}
	
	/*
	 * Sets the client id for the employee
	 */
	public function set_client_id($client_id){
		$this->client_id = $client_id;
	}
	
	/*
	 * Returns the client id for the employee
	 */
	public function get_client_id(){
		return $this->client_id;
	}
	
	/*
	 * Returns whether a given instance of Employee is equal to the
	 * current employee
	 * @param Employee
	 * @return true if and only if all attributes are equal (when 
	 *         dealing with strings, the behaviour is case insensitive)
	 */
	public function equals($emp){
		return strcasecmp($this->$first_name,$emp->get_first_name()) &&
			strcasecmp($this->$last_name,$emp->get_last_name()) &&
			$this->$client_id === $emp->get_client_id();
	}
	
	/*
	 * Displays all attributes for the employee nicely
	 */
	public function display_employee(){
		echo "<dl>\n";
		echo "<dt>First name:</dt> <dd>" . $this->get_first_name() . "</dd>\n";
		echo "<dt>Last name:</dt> <dd>" . $this->get_last_name() . "</dd>\n";
		echo "<dt>Client:</dt> <dd>" . $this->get_client_id() . "</dd>\n";
		echo "</dl>\n";
	}
}
