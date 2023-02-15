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
   
   if(empty($cust["card"])) {
     $errorMsgs["card"] = "Please enter your credit card number (VISA or Mastercard, e.g. 1234 5678 1234 5678)";
   } else if (!preg_match("/^(\d{4}[-. ]?){4}|\d{4}[-. ]?\d{6}[-. ]?\d{5}$/", $cust["card"])) {
     $errorMsgs["card"] = "Please enter a proper VISA or Mastercard credit card (e.g. 1234 5678 1234 5678)";
   }
   
   if(empty($cust["expiry"])) {
     $errorMsgs["expiry"] = "Please enter a valid expiry year and month (e.g. 2020-01)";
   } else if (!preg_match('/^\d{4}-\d{2}$/', $cust["expiry"])) {
     $errorMsgs["expiry"] = "Please enter the expiry date in YYYY-MM format! (e.g. 2020-01)";
   } else {
     $monthyear = date("Y-m");
     if ($cust["expiry"] <= $monthyear) {
       $errorMsgs["expiry"] = "Sorry, but your credit card has expired.";
     }
   }
   
   return $errorMsgs;
 }



?>
