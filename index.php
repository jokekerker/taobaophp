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

    $urlstr = $_GET['text_first'];

    // $urlstr = 'https://detail.1688.com/offer/561669583995.html?spm=a261dd.8685230.j2izvcup.6.DFjx1r';

    $ch = curl_init();
    // Set options for the cURL
    curl_setopt($ch, CURLOPT_URL, $urlstr); // target
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // provide a user-agent
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow any redirects
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the result
    // Execute the cURL fetch
    $result = curl_exec($ch);
    // Close the resource
    // curl_close($ch);
    // Output the results
    // echo $result;


    
    // $urlstr = $_GET['text_first'];
    // $html = HtmlDomParser::file_get_html($result);
    // $html = HtmlDomParser::file_get_html( $result );
    $html = HtmlDomParser::str_get_html( $result );
    // $html->clear();

    // var_dump($html);

    // item.taobao.com
    foreach ($html->find('div[class=tb-item-info tb-clear]') as $element){
        $element->encoding = 'utf-8';
        echo $element . '<br>';
    }

    // detail.tmall.com
    foreach ($html->find('div[class=tb-gallery]') as $element){
        $element->encoding = 'utf-8';
        echo $element . '<br>';
    }

    foreach ($html->find('div[class=tb-property]') as $element){
        $element->encoding = 'utf-8';
        echo $element . '<br>';
    }

    // http://www.alibaba.com
    foreach ($html->find('div[class=detail-col esite-clearfix]') as $element){
        $element->encoding = 'utf-8';
        echo $element . '<br>';
    }

    // detail.1688.com
    // echo $html;
    foreach ($html->find('div[class=grid-full grid-full-bd]') as $element){
        $element->encoding = 'utf-8';
        echo $element . '<br>';
    }
}

?>