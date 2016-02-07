<?php
function call($controller, $action)
{	//require the file matches the controller name
	require_once('controllers/'.$controller.'_controller.php');

	//create a new instance of the needed controller
	switch($controller)
	{
		case 'pages':
			$controller = new PagesController();
		break;
	}

	//call the action
	$controller->{$action}();
}

//List of controllers and their action
//Allowed values
$controllers = array('pages' =>['home','error']);

//check if the requested controller and actions exists
//if any other access is tried a redirection will occur

if (array_key_exists($controller, $controllers)) 
{
	if (in_array($action, $controllers[$controller]))
	{
		call($controller, $action);
	} 
	else 
	{
		call('pages','error');
	}
	
} 
else 
{
	call('pages','error');
}


?>