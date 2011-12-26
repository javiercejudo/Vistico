<?php
/**
 * Instances of this class represent each project developed by a client
 * @author Javier Cejudo
 * @version 1.0
 */
class Project {
	private $short_name;
	private $full_name;
	private $manager_id;
	private $start_date;
	private $end_date;

	/**
	 * Constructs an object Project only from a short name
	 * @param short_name
	 */
	function __construct($short_name){
		$this->set_short_name($short_name);
	}
	
	/*
	 * Returns the short name of a project
	 */
	public function set_short_name($short_name){
		$this->short_name = $short_name;
	}
	
	/*
	 * Sets the short name of a project
	 */
	public function get_short_name(){
		return $this->short_name;
	}
	
	/*
	 * Returns the full name of a project
	 */
	public function set_full_name($full_name){
		$this->full_name = $full_name;
	}
	
	/*
	 * Sets the full name of a project
	 */
	public function get_full_name(){
		return $this->full_name;
	}
	
	/*
	 * Returns the project manager id
	 */
	public function set_manager_id($manager_id){
		$this->manager_id = $manager_id;
	}
	
	/*
	 * Sets the project manager id
	 */
	public function get_manager_id(){
		return $this->manager_id;
	}
	
	/*
	 * Returns the start date of a project
	 */
	public function set_start_date($start_date){
		$this->start_date = $start_date;
	}
	
	/*
	 * Set the start date of a project
	 */
	public function get_start_date(){
		return $this->start_date;
	}
	
	/*
	 * Returns the end date of a project
	 */
	public function set_end_date($end_date){
		$this->end_date = $end_date;
	}
	
	/*
	 * Set the end date of a project
	 */
	public function get_end_date(){
		return $this->end_date;
	}
	
	/*
	 * Returns whether a given instance of Project is equal to the
	 * current project
	 * @param Project
	 * @return true if and only if all attributes are equal (when 
	 *         dealing with strings, the behaviour is case insensitive)
	 */
	public function equals($pro){
		return strcasecmp($this->$short_name,$pro->get_short_name()) &&
			strcasecmp($this->$full_name,$pro->get_full_name()) &&
			$this->$manager_id === $pro->get_manager_id() &&
			$this->$start_date === $pro->get_start_date() &&
			$this->$end_date === $pro->get_end_date();
	}
	
	/*
	 * Displays all project attributes nicely
	 */
	public function display_project(){
		echo "<dl>\n";
		echo "<dt>Short name:</dt> <dd>" . $this->get_short_name() . "</dd>\n";
		echo "<dt>Full name:</dt> <dd>" . $this->get_full_name() . "</dd>\n";
		echo "<dt>Manager:</dt> <dd>" . $this->get_manager_id() . "</dd>\n";
		echo "<dt>Start date:</dt> <dd>" . $this->get_start_date() . "</dd>\n";
		echo "<dt>End date:</dt> <dd>" . $this->get_end_date() . "</dd>\n";
		echo "</dl>\n";
	}
}
