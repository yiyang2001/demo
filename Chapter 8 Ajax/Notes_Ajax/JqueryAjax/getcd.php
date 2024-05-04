<?php
$q = $_GET["q"];

// Load XML file
$xmlDoc = new DOMDocument();
$xmlDoc->load("cd_catalog.xml");

$cds = $xmlDoc->getElementsByTagName('CD');

$response = "";

// Loop through each "CD" element
foreach ($cds as $cd) {
    $artist = $cd->getElementsByTagName('ARTIST')->item(0)->nodeValue;
    
    // Check if the artist name matches the query (case-insensitive)
    if (strcasecmp($artist, $q) === 0) {
      $childNodes = $cd->childNodes;
      foreach ($childNodes as $node) {
          if ($node->nodeType === XML_ELEMENT_NODE) {
              $response .= "<b>" . $node->nodeName . ":</b> " . $node->nodeValue . "<br>";
          }
      }
   }
}

echo $response;
?>