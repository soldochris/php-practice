<?php
//enable strict type checking
declare(strict_types=1);

//importing constants
require_once "consts.php";

//import functions
require_once "functions.php";

//importing the next movie
require_once "classes/NextMovie.php";

//creating the next movie with the static method passing the API_URL
$next_movie = NextMovie::fetch_and_create_movie(API_URL);

//getting the data from the next movie
$next_movie_data = $next_movie->get_data();

//render head and pass the necessary data
render_template("head", $next_movie_data);

//render styles
render_template("styles");

//render main and pass the necessary data merging the data object
//with result of calling the get_until_message method
render_template("main", array_merge(
  $next_movie_data, 
  ["until_message" => $next_movie->get_until_message()]
));

?>