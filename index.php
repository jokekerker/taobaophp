<?php 
//include_once "vendor/autoload.php";
//use Sunra\PhpSimple\HtmlDomParser;
// /var/www/html/taobao/vendor/sunra/php-simple-html-dom-parser/Src/Sunra/PhpSimple/HtmlDomParser.php
//header('Content-Type: text/html; charset=utf-8');
//header('Content-Type: text/html; charset=utf-8');
echo '<meta http-equiv="content-type" content="text/html; charset=utf-8"/>';


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

//$html = HtmlDomParser::file_get_html('https://item.taobao.com/item.htm?spm=a21bo.7929913.198967.22.473f8c80RNCXEf&id=557488171107');
$urlstr = 'https://item.taobao.com/item.htm?spm=a21wu.241046-global.4691948847.3.7a6cdb29U1yA27&scm=1007.15423.84311.100200300000005&id=561065846240&pvid=74d9c0b8-89a6-4c85-8b4a-235508b49$508b49da2';
$html = HtmlDomParser::file_get_html($urlstr);
//echo $html;
// $html = HtmlDomParser::str_get_html('<div id="hello">Hello</div><div id="world">World</div>');
//$html->encoding = 'utf-8';

foreach($html->find('div[class=tb-item-info tb-clear]') as $element)
        $element->encoding = 'utf-8';
        echo $element . '<br>';
//require __DIR__ . 'vendor/autoload.php';

//$log = new Monolog\Logger('name');
//$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
//$log->addWarning('Foo');


?>
