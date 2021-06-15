<?php

//including classes' php files
include "Html.php";
include "Css.php";

$img = new Image;
$img->id = "img1";
$img->source = "lion.jpg";

$imgcss = new ImageCSS;
$imgcss->id = $img->id;
$imgcss->width = "400px";
$imgcss->heigth = "1000px";
$imgcss->border = "5px dashed red";

//<style> class
$style = new Style;
$style->csscode = $imgcss->img();

//Title of Webpage
$title = new Title;
$title->name = "FrontPHP v1.0";

//<head> class
$head = new Head;
$head->code = "{$style->style()}{$title->title()}";

//<body> class
$body = new Body;
$body->code = $img->img();

//Running Our Webpage
$html = new Html;
$html->code = "{$body->body()}{$head->head()}";
$html->run();

?>
