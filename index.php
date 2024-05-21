<?php
//enable strict type checking
declare(strict_types=1);

//importing constants
require_once "consts.php";

//import functions
require_once "functions.php";

//storing the data 
$data = get_data(API_URL);

//getting the correct until message
$untilMessage = get_until_message($data["days_until"]);

//importing head
require_once "sections/head.php";

//importing styles
require_once "sections/styles.php";

//importing main
require_once "sections/main.php";

?>