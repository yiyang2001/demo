<?php
// Get the query parameter from the URL
$q = $_GET["q"];

// Load the XML file
$xmlDoc = new DOMDocument();
$xmlDoc->load("cd_catalog.xml");

// Get all elements with the tag name "ARTIST"
$artists = $xmlDoc->getElementsByTagName('ARTIST');
// echo "<pre>";
// print_r($artists); // DOMNodeList Object ( [length] => 26 )
// echo "</pre>";

// Loop through each "ARTIST" element
foreach ($artists as $artist) {
    // echo "<pre>";
    // print_r($artist); // DOMElement Object ( [tagName] => ARTIST )
    // echo "</pre>";

    // Get the artist name
    $artistName = $artist->nodeValue; // Get the text content of the "ARTIST" element
    
    // Check if the artist name matches the query
    if ($artistName === $q) { 
        // Get the parent node of the current "ARTIST" element (which is the "CD" element)
        $cd = $artist->parentNode;

        // echo "<pre>";
        // print_r($cd); // DOMElement Object ( [tagName] => CD )
        // echo "</pre>";

        // Output the CD information in HTML format
        $childNodes = $cd->childNodes;

        // echo "<pre>";
        // print_r($childNodes); // DOMNodeList Object ( [length] => 13 )
        // echo "</pre>";

        foreach ($childNodes as $node) {

            echo "<pre>";
            print_r($node); 
            echo "</pre>";
            
            // Process only element nodes 
            // Predefined constants for node types: https://www.php.net/manual/en/dom.constants.php
            if ($node->nodeType === XML_ELEMENT_NODE) { // Check if the node type is an element node (nodeType == 1)
                // Output the node name and value
                echo "<b>" . $node->nodeName . ":</b> " . $node->nodeValue . "<br>";
            }
        }
        echo "<br>";
    }
}
?>
