<?php

/* Call this function in the booking page like so:
   $postErrors = validateBooking();
   If the array is empty, then no errors were generated
*/
function validateBooking() {
  $errors = []; // new empty array to return multiple error messages
  $username = trim($_POST['user']['name']);
  if ( $username == '') {
    $errors['user']['name'] = "Name can't be blank";
  } else {
  }
  $email = trim($_POST['user']['email']);
  if ($email == '') {
    $errors['user']['email'] = "Email can't be blank";
  } else {
  }
  $email = trim($_POST['user']['mobile']);
  if ($email == '') {
    $errors['user']['mobile'] = "Mobile can't be blank";
  } else {
  }
  $email = trim($_POST['user']['card']);
  if ($email == '') {
    $errors['user']['card'] = "Card can't be blank";
  } else {
  }
    $email = trim($_POST['user']['expiry']);
    if ($email == '') {
      $errors['user']['expiry'] = "Expiry can't be blank";
    } else {
    }
  return $errors; // empty array -> no errors; populated array -> errors.
}



?>
