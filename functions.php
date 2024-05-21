<?php
//function to get data from an API, receives a string as a param and returns an array
function get_data(string $url): array {
  //getting the information from the API
  $result = file_get_contents($url);

  //decode the json and convert it into an associative array
  $data = json_decode($result, true);

  return $data;
}


//function to get days until
function get_until_message(int $days): string {

  $message = match(true){
    $days === 0 => "It's today! 🥳",
    $days === 1 => "It's Tomorrow 🤩",
    $days < 7 => "This week 🚀 in $days days",
    $days < 14 => "The next week ⌛️ in $days days",
    $days < 30 => "This month 🗓️ in $days days",
    $days < 60 => "The next month 📜 in $days days",
    $days < 364 => "This year 🔮 in $days days",
    default => "Coming soon! 😌 in $days days"
  };
  return $message;
}

?>