<?php 
// Create DOM from URL or file
echo 'test test';

$html = file_get_html('https://www.google.com/');

// Find all images 
foreach($html->find('img') as $element) 
       echo $element->src . '<br>';

// Find all links 
foreach($html->find('a') as $element) 
       echo $element->href . '<br>';
 ?>