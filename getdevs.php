<?php
// Check if 'NAME' parameter is set in the request
if (isset($_GET['NAME'])) {
    $cdName = $_GET['NAME'];

    // Load the XML file
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("data.xml"); // File path

    // Get all <CD> elements
    $cds = $xmlDoc->getElementsByTagName("CD");

    // Iterate through each <CD> element to find the one that matches the NAME
    foreach ($cds as $cd) {
        // Get the <NAME> element within this <CD>
        $nameElement = $cd->getElementsByTagName("NAME")->item(0);
        if ($nameElement !== null && $nameElement->nodeValue === $cdName) {
            // If a match is found, display the CD's details
            $group = $cd->getElementsByTagName("GROUP")->item(0)->nodeValue;
            $position = $cd->getElementsByTagName("POSITION")->item(0)->nodeValue;
            $sec_year = $cd->getElementsByTagName("SEC_YEAR")->item(0)->nodeValue;
            $age = $cd->getElementsByTagName("AGE")->item(0)->nodeValue;
            $email = $cd->getElementsByTagName("EMAIL")->item(0)->nodeValue;

            // Display the Devs information in a formatted manner
            echo "<b>Group:</b> $group<br>";
            echo "<b>Name:</b> $nameElement->nodeValue<br>";
            echo "<b>Position:</b> $position<br>";
            echo "<b>Section Year:</b> $sec_year<br>";
            echo "<b>Age:</b> $age<br>";
            echo "<b>Email:</b> $email<br>";

            // Exit the loop after finding the match
            break;
        }
    }
} else {
    echo "No Developer selected.";
}
?>


