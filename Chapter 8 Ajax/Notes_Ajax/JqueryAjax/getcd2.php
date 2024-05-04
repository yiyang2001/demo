<?php
// Load the XML file
$xml = simplexml_load_file('cd_catalog.xml');

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