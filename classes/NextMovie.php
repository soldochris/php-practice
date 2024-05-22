<?php
declare(strict_types=1);

class NextMovie{
  public function __construct(
    private int $days_until,
    private string $title,
    private string $following_production,
    private string $release_date,
    private string $poster_url,
    private string $overview
  ){}

  //Method to a message based on the remaining days
  public function get_until_message(): string {
    $days = $this -> days_until;

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


  //Method to get data from an API, 
  //receives a string as a param and returns an array
  public static function fetch_and_create_movie(string $api_url): NextMovie {
    //getting the information from the API
    $result = file_get_contents($api_url);

    //decode the json and convert it into an associative array
    $data = json_decode($result, true);

    return new self(
      $data["days_until"],
      $data["title"],
      $data["following_production"]["title"] ?? "We don't know yet",
      $data["release_date"],
      $data["poster_url"],
      $data["overview"],

    );
  }

  public function get_data(){
    return get_object_vars($this);
  }
}

?>