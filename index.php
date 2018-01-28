<!DOCTYPE html>
<html lang="">
<head>
    <title>TEMPLATE BOOTSTRAP RESPONSIVE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no, date=no, address=no">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="company name">
    <meta content="archive" name="googlebot">
    <meta content="index, follow" name="robots">
    <meta content="7 days" name="revisit-after">
    <!-- <link rel="shortcut icon" href="favicon.ico"> -->

    <!--style sheet-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

    </head>

    <body>


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
<div class="row">
    <div class="col-xs-6 text-center">
    

    <?php

    if(isset($_GET['text_first'])) {

        $urlstr = 'https://detail.1688.com/offer/561669583995.html?spm=a261dd.8685230.j2izvcup.6.DFjx1r';

        $ch = curl_init();
        // Set options for the cURL
        curl_setopt($ch, CURLOPT_URL, $urlstr); // target
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // provide a user-agent
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow any redirects
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the result
        // Execute the cURL fetch
        $result = curl_exec($ch);
        // Close the resource
        curl_close($ch);
        // Output the results
        echo $result;


        
        // $urlstr = $_GET['text_first'];
        // $html = HtmlDomParser::file_get_html($urlstr);
        // $html->clear();

        // var_dump($html);

        // // item.taobao.com
        // foreach ($html->find('div[class=tb-item-info tb-clear]') as $element){
        //     $element->encoding = 'utf-8';
        //     echo $element . '<br>';
        // }

        // // detail.tmall.com
        // foreach ($html->find('div[class=tm-clear]') as $element){
        //     $element->encoding = 'utf-8';
        //     echo $element . '<br>';
        // }

        // // http://www.alibaba.com
        // foreach ($html->find('div[class=detail-col esite-clearfix]') as $element){
        //     $element->encoding = 'utf-8';
        //     echo $element . '<br>';
        // }

        // // detail.1688.com
        // // echo $html;
        // foreach ($html->find('div[class=grid-full grid-full-bd]') as $element){
        //     $element->encoding = 'utf-8';
        //     echo $element . '<br>';
        // }
    }

    ?>
    </div>
</div>



<!-- library
    ================================================== --> 
    <script src="js/libs/modernizr.min.js"></script> 
    <script src="js/libs/detectizr.min.js"></script> 
    <script src="js/libs/jquery-1.11.3.min.js"></script> 

<!-- Bootstrap
    ================================================== --> 
    <script src="js/bootstrap/bootstrap.min.js"></script> 
    <script src="js/bootstrap/bootstrap-select.js"></script> 

<!-- Plugins
    ================================================== --> 
    <script src="js/libs/retina.min.js"></script> 
    <script src="js/libs/jquery.matchHeight-min.js"></script> 
    <script src="js/libs/jquery.dotdotdot.js"></script> 

<!-- Custom main
    ================================================== --> 
    <script src="js/main.js"></script>
    <script src="js/bootstrap/bootstrap-datepicker-be.min.js"></script> 
    <script src="js/bootstrap/bootstrap-datepicker.th.min.js"></script> 
    <script src="js/libs/jquery.ui.widget.js"></script> 
    <script src="js/libs/jquery.iframe-transport.js"></script> 
    <script src="js/libs/jquery.fileupload.js"></script> 
    <script src="js/libs/jquery.validate.min.js"></script>


</body>
</html>



