<?php
$q = $_GET["q"]; //Bonnie Tyler

// Load XML file
$xmlDoc = new DOMDocument(); // Create a new DOMDocument object
$xmlDoc->load("cd_catalog.xml"); // Load the XML file


$x = $xmlDoc->getElementsByTagName('ARTIST'); // Get all elements with the tag name "ARTIST"
// $x is the array of ARTIST element , DOMNodeList Object ( [length] => 26 )
// print the DOMNodeList Object ( [length] => 26 )

echo "<pre>";
// print_r($x->item(0)->childNodes->item(0)->nodeValue);
// print_r($x->item(0)->childNodes->item(0));
echo "</pre>";

// Find the CD information for the specific CD
// Loop through all the CD element, $x is the array of CD elements, $x->length is the number of CD elements
for ($i = 0; $i <= $x->length - 1; $i++) {
  //Process only element nodes
  // $x->item($i) is the current CD element , $x->item($i)->nodeType is the type of the current CD element
  // nodeType == 1 means the current CD element is an element node
  if ($x->item($i)->nodeType == XML_ELEMENT_NODE) { // Check if the node type is an element node
    // Check if the node value is equal to the query
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      // print_r($x->item($i)->childNodes->item(0)->nodeValue);
      // Output the CD information
      $y = ($x->item($i)->parentNode); // $y is the parent node of the current CD element
      // echo "<pre>";
      // print_r($y);
      // echo "</pre>";
      }
    }
  }

// Get the child nodes of the parent node
$cd = ($y->childNodes);
// echo "<pre>";
// print_r($cd);
// echo "</pre>";

// Output the CD information in HTML format
// Loop through all the child nodes of the parent node
for ($i = 0; $i < $cd->length; $i++) {
  //Process only element nodes
  // Check if the node type is an element node (nodeType == 1), if nodeType == 0, it is a text node
  if ($cd->item($i)->nodeType == XML_ELEMENT_NODE) {
    // Output the node name and value
    echo ("<b>" . $cd->item($i)->nodeName . ":</b> ");
    echo ($cd->item($i)->nodeValue);
    echo ("<br>");
    }
  }
?>
