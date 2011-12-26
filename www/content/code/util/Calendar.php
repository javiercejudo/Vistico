<?php
/**
 * Instances of this class will help managing dates and operation with
 * date formats
 * @author Javier Cejudo
 * @version 1.0
 */
class Calendar{
	/**
	 * Returns the difference in seconds between two dates
	 */
	function get_duration_from_str($d1,$d2){
		$d1 = strtotime($d1);
		$d2 = strtotime($d2);
		return $d2-$d1;
	}
}
?>
