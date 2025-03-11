<?php

function getRandomCode() {
  $code = '';
  for ($i = 0; $i < 6; $i++) {
    $code .= chr(rand(97, 122)); // Generate a random lowercase letter between 'a' and 'z'
  }
  return $code;
}

echo getRandomCode();
