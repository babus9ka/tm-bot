<?php
include_once ('simple_html_dom.php');

use Imagick;
$html = file_get_html('https://www.mrk-bsuir.by/ru');
$pdf = $html->find('#rasp', 0)->href;

$png = new Imagick($pdf[2]);

$png->setResolution( 300, 300 );
$png->setImageFormat( "png" );
$png->writeImage('newfilename.png');
