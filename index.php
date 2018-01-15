<?php 
//include_once "vendor/autoload.php";
//use Sunra\PhpSimple\HtmlDomParser;
// /var/www/html/taobao/vendor/sunra/php-simple-html-dom-parser/Src/Sunra/PhpSimple/HtmlDomParser.php
//header('Content-Type: text/html; charset=utf-8');
//header('Content-Type: text/html; charset=utf-8');
header('Content-Type: text/html; charset=GBK');
// echo '<meta http-equiv="content-type" content="text/html; charset=utf-8"/>';


try{
    require_once  'vendor/autoload.php';
}
catch(Exception $o){
    error_log($o);
}

use Sunra\PhpSimple\HtmlDomParser;

//use /var/www/html/taobao/vendor/sunra/php-simple-html-dom-parser/Src/Sunra/PhpSimple/
//use HtmlDomParser;

// Create DOM from URL or file
// echo 'test test';
?>

<form method='get' action='index.php'>
    <input type="text" id="text_first" name="text_first" /> <br />
    <input type="submit" id="submit" />
</form>

<?php

if(isset($_GET['text_first'])) {
    // $urlstr = 'https://item.taobao.com/item.htm?spm=a21wu.241046-global.4691948847.3.7a6cdb29U1yA27&scm=1007.15423.84311.100200300000005&id=561065846240&pvid=74d9c0b8-89a6-4c85-8b4a-235508b49$508b49da2';
    $urlstr = $_GET['text_first'];
	$html = HtmlDomParser::file_get_html($urlstr);


	foreach ($html->find('div[class=tb-item-info tb-clear]') as $element){
		$element->encoding = 'utf-8';
	    echo $element . '<br>';
	}
}


?>
