<?php
//enable strict type checking
declare(strict_types=1);

//Function to render templates
function render_template(string $template, array $data =[] ){
  //get the variables from the associative array $data 
  extract($data);
  require "./templates/$template.php";
}

?>