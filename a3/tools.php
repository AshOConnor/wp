<?php
  session_start();

/* Put your PHP functions and modules here.
   Many will be provided in the teaching materials,
   keep a look out for them!
*/
function debugModule() {    
  echo "<pre id='debug'>";     
  print_r($_POST);    
  echo "</pre>";    
 }

function printMyCode() {
  $allLinesOfCode = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre id='myCode'><ol>"; 
  foreach($allLinesOfCode as $oneLineOfCode) {
    echo "<li>" .rtrim(htmlentities($oneLineOfCode)) . "</li>";
  }
  echo "</ol></pre>";
}

function php2js( $arr, $arrName ) {
  $arrJSON = json_encode($arr, JSON_PRETTY_PRINT);
  echo <<<"CDATA"
  <script>
    /* Variable generated with Trev's handy php2js() function */
    var $arrName = $arrJSON;
  </script>
CDATA;
}

?>