<?php
/* Call this function in the booking page like so:
   $postErrors = validateBooking();
   If the array is empty, then no errors were generated
*/

function validateFormPHP() {
  $cust = $_POST["cust"];
  $errorMsgs = array();
  
  // Server-side validation
  if(empty($cust["name"])) {
    $errorMsgs["name"] = "Please enter your name (e.g. Jane Doe)";
  }
  
  if(empty($cust["email"])) {
    $errorMsgs["email"] = "Please enter your email (e.g. example@email.com)";
  } else if (!filter_var($cust["email"], FILTER_VALIDATE_EMAIL)) {
    $errorMsgs["email"] = "Please enter a proper email address (e.g. example@email.com)";
  }
  
  if(empty($cust["mobile"])) {
    $errorMsgs["mobile"] = "Please enter your mobile number (e.g. 0412 345 678)";
  } else if (!preg_match("/^(\(04\)|04|\+614)[ ]?\d{1,4}?[ ]?\(?\d{1,3}?\)?[ ]?\d{1,4}[ ]?\d{1,4}[ ]?\d{1,9}$/", $cust["mobile"])) {
    $errorMsgs["mobile"] = "Please enter a proper phone number (e.g. 0412 345 678)";
  }
  
  return $errorMsgs;
}



?>
