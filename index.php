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

// Create DOM from string
$html = str_get_html('<div id="hello">Hello</div><div id="world">World</div>');

$html->find('div', 1)->class = 'bar';

$html->find('div[id=hello]', 0)->innertext = 'foo';

echo $html; // Output: <div id="hello">foo</div><div id="world" class="bar">World</div>
?>