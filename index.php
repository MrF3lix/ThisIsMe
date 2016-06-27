<?php
	/*
		--- Base version ---
		Autor: Nermin Elkasovic
		
		--- Adjusted version ---
		Autor: Felix Saaro
		Changes: Adjustemnts in MYSQL constants and change routing

	*/

	session_start();   
	define('MYSQL_HOST', "localhost");
	define('MYSQL_USER' ,"root");
	define('MYSQL_PW' ,"");
	define('MYSQL_DB', "thisisme");
	//COFIGURE THIS AT THE BEGINNING!
    define('BASEURL', 'http://localhost:81/thisisme/');

	include_once('./lib/DB.php') ;

	$request = array_merge($_GET, $_POST);

	$controller = !empty($request['controller']) ? $request['controller'] : 'index';
	$action = !empty($request['action']) ? $request['action'] : 'view';
	$id = !empty($request['id']) ? $request['id'] : '0'; 

	appLoader($controller);

	function appLoader($module) {
		$class = strtolower($module);

		if(!file_exists('./app/controller/'. $class . 'Controller.php')) {
			$class = 'index';
		}

		$controller = './app/controller/'. $class . 'Controller.php';
		$model 		= './app/model/'. $class . 'Model.php';
		$view		= './app/view/'. $class . 'View.php';

		include_once($controller) ;
		include_once($model) ;
		include_once($view) ;
	}

	$controller = new Controller();

    if(isset($_SESSION['token']))
    {
		if($action == 'edit')
		{
        	echo $controller->edit($id); 
		}
		else if($action == 'save'){
			echo $controller->save($id);
		}
		else if($action == 'delete'){
			echo $controller->delete($id);
		}
		else if($action == 'create'){
			echo $controller->create();
		}
		else{
        	echo $controller->index($id); 
		}     
    }
    else{
        if($action == 'login')
        {
            $controller->login();
        }
		else if($action == 'register'){
			$controller->register();
		}
        echo $controller->indexPublic();
    }

?>