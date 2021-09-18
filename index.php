<?php
include_once ('simple_html_dom.php');

use Imagick;
$html = file_get_html('https://www.mrk-bsuir.by/ru');
$pdf = $html->find('#rasp', 0)->href;

echo 123;