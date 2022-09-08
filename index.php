<?php

$task = [
  "title" => "Coding Practice",
  "due" => "daily",
  "assigned_to" => "Oscar",
  "completed" => true
];

// $person = [
//   "name" => "Oscar Wankaew",
//   "age" => 28,
//   "career" => "Web developer"
// ];

// $person["hair"] = "black";

//unset($person["age"]); to delete a selected "key, value" within an array

// foreach ($names as $name) {
//   echo $name . ", ";
// }

// echo "<pre>";
// var_dump($person); to echo out an array because echo only return strings
// echo "</pre>";
// die(var_dump($person)); to only print out var_dump();

require "index.view.php";
