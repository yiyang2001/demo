<?php
// Fill up array with names
// $a[] = "Anna";
// $a[] = "Brittany";
// $a[] = "Cinderella";
// $a[] = "Diana";
// $a[] = "Eva";
// $a[] = "Fiona";
// $a[] = "Gunda";
// $a[] = "Hege";
// $a[] = "Inga";
// $a[] = "Johanna";
// $a[] = "Kitty";
// $a[] = "Linda";
// $a[] = "Nina";
// $a[] = "Ophelia";
// $a[] = "Petunia";
// $a[] = "Amanda";
// $a[] = "Raquel";
// $a[] = "Cindy";
// $a[] = "Doris";
// $a[] = "Eve";
// $a[] = "Evita";
// $a[] = "Sunniva";
// $a[] = "Tove";
// $a[] = "Unni";
// $a[] = "Violet";
// $a[] = "Liza";
// $a[] = "Elizabeth";
// $a[] = "Ellen";
// $a[] = "Wenche";
// $a[] = "Vicky";
$namelist[] = "BRYAN CHOW KAY HAO";
$namelist[] = "CHEN YUAN";
$namelist[] = "CHONG JUN HAO";
$namelist[] = "CHUAH JUN YU";
$namelist[] = "CHUAH YI JIE";
$namelist[] = "CHUNG YI XUAN";
$namelist[] = "DANIEL LEE JUN YU";

//get the q parameter from URL
$q = $_GET["q"]; // C

//lookup all hints from array if length of q>0
if (strlen($q) > 0) {
  $hint = ""; // initialize the hint to an empty string
  for ($i = 0; $i < count($namelist); $i++) {
    // Check if the string is in the array using the substr() function
    if (strtolower($q) == strtolower(substr($namelist[$i], 0, strlen($q)))) {
      if ($hint == "") {
        $hint = $namelist[$i]; // add CHEN YUAN
        } else {
        // Concatenate the strings with a comma because there are multiple matches
          $hint = $hint . " , " . $namelist[$i];
        }
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "") {
  $response = "no suggestion";
  } else {
  $response = $hint;
  }

//output the response
echo $response;
?>