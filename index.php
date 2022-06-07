<?php

$deny = array("35.226.61.16", "178.000.00.00","45.140.13.119");
if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
   header("location: https://google.com/");
   exit();
}
?>
	
<?php
// Routing system
$request = $_SERVER['REQUEST_URI'];
switch ($request) {

    case '/' :
        require __DIR__ . '/home.php';
        break;
    case '/home' :
        require __DIR__ . '/home.php';
        break;
    case '/selling' :
        require __DIR__ . '/selling.php';
        break;
    case '/buying' :
        require __DIR__ . '/buying.php';
        break;
	  case '/userbuy' :
		require __DIR__ . '/userbuy.php';
        break;
    case '/makefile' :
		require __DIR__ . '/makefile.php';
        break;
    case '/about' :
        require __DIR__ . '/about.php';
        break;
    case '/checkout' :
        require __DIR__ . '/checkout.php';
        break;
   case '/cow' :
        require __DIR__ . '/cow.php';
        break;
   case '/com' :
        require __DIR__ . '/com.php';
        break;
   case '/error' :
        require __DIR__ . '/error.php';
        break;
    case '/400' :
        require __DIR__ . '/400.php';
        break;
   case '/403' :
        require __DIR__ . '/403.php';
        break;
  case '/401' :
        require __DIR__ . '/401.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
?>
<!--because we made this shit in stright php who need web tools-->
