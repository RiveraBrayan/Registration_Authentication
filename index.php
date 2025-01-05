<?php
	/*=============================================
	Mostrar errores
	=============================================*/

	ini_set('display_errors', 1);
	ini_set("log_errors", 1);
	date_default_timezone_set('America/Chihuahua');
	ini_set("error_log",  "/Applications/XAMPP/xamppfiles/htdocs/registration_authentication/php_error_log");


	/*=============================================
	CORS
	=============================================*/ 

	header("Access-Control-Allow-Origin: *"); 
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE"); 
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization"); 



	/*=============================================
	Requerimientos
	=============================================*/
	session_start();
    $request = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    include './views/template.php';


?>