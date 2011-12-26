<?php 
ini_set('display_errors',1);
include_once('config.php');
include_once(pers.'DBManager.php');
include_once(model.'Project.php'); 
include_once(model.'Employee.php'); 
include_once(util.'Calendar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Vistico</title>
	<link rel='stylesheet' id='style-css' href='content/css/main.css?ver=1' type='text/css' media='screen' />
</head>
<body>
	<h1 title="Logo de vistico">
		<img alt="logo de vistico" src="images/vistico_logo.png" width="304" height="131" />
	</h1>
<?php
	$project = new Project("Vistico");
	$project->set_full_name("Project management for publicly funded projects");
	$project->set_manager_id(1);
	$project->set_start_date("2011-12-17");
	$project->set_end_date("2013-06-16");
	$project->display_project();
	//one way to compute the duration
	$duration = Calendar::get_duration_from_str($project->get_start_date(),
		$project->get_end_date());
	//alternative computation
	/* $calendar = new Calendar();
	 * $duration = $calendar->get_duration_from_str($project->get_start_date(),
	 * $project->get_end_date());
	 */
	
	echo '<p>The expected duration of the project is ~' . round($duration/60/60/24) . ' days.</p>' . "\n";
	
	$employee = new Employee("Javier", "Cejudo");
	$employee->set_client_id(1);
	
	$DBManager = new DBManager();
	$DBManager->addProject($project);
	$DBManager->addEmployee($employee);
?>
</body>
</html>
