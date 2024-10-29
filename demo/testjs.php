<?php
// Load HTML from a URL
$url = "https://mobireviewz.com/samsung/page-27";
$html = file_get_contents($url);

// Create a new DOMDocument object
$dom = new DOMDocument();
@$dom->loadHTML($html); // Suppress warnings with '@'

// Create an XPath object to query the DOM
$xpath = new DOMXPath($dom);

// Extract and print the title
$title = $xpath->query('//li')->item(0)->textContent;
echo "Title: $title\n\n";

// Extract and print all links with href attributes
$links = $xpath->query('//a[@href]');
foreach ($links as $link) {
    echo "Link: " . $link->getAttribute('href') . "\n";
    echo "Text: " . $link->textContent . "\n\n";
}
?>
