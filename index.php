<?php

$isLogin = false;
$message = $isLogin ? 'Welcome' : 'Please login';
$students = [
  ['name' => 'John', 'score' => 80],
  ['name' => 'Bob', 'score' => 60],
  ['name' => 'Alice', 'score' => 70]
];

// if ($isLogin) {
//   $message = 'Welcome';
// } else {
//   $message = 'Please login';
// }

echo "$message";
