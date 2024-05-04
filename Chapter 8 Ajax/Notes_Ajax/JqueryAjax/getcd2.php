<?php
// Load the XML file
$xml = simplexml_load_file('cd_catalog.xml');

// Iterate over each CD element
foreach ($xml->CD as $cd) {
    // Output the CD information
    // loop through each child node of the CD element
    foreach ($cd->children() as $child) {
        // Get Artist name
        if ($child->getName() === "ARTIST") {
            $artist = $child;
            // Check if the artist name matches the query
            if ($artist == $_GET["q"]) {
                // Output the CD information in HTML format
                foreach ($cd->children() as $child) {
                    echo "<b>" . $child->getName() . ":</b> " . $child . "<br>";
                }
                echo "<br>";
            }
        }    
    }
}

// provided know the cd info
foreach($xml->CD as $cd) {
    if ($cd->ARTIST == $_GET["q"]) {
        echo "<b>ARTIST:</b> " . $cd->ARTIST . "<br>";
        echo "<b>TITLE:</b> " . $cd->TITLE . "<br>";
        echo "<b>COUNTRY:</b> " . $cd->COUNTRY . "<br>";
        echo "<b>COMPANY:</b> " . $cd->COMPANY . "<br>";
        echo "<b>PRICE:</b> " . $cd->PRICE . "<br>";
        echo "<b>YEAR:</b> " . $cd->YEAR . "<br>";
        echo "<br>";
    }
}

?>