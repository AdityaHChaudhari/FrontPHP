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

//label and input
$usrlabel = new Label;
$usrinput = new Input;
$usrinput->type = "text";
$usrinput->name = "usr";
$usrlabel->For = $usrinput->name;
$usrlabel->text = "Username : ";

$usrlabel1 = new Label;
$usrinput1 = new Input;
$usrinput1->type = "radio";
$usrinput1->name = "gen";
$usrlabel1->For = $usrinput->name;
$usrlabel1->text = "male : ";

$b = "{$usrlabel1->label()}{$usrinput1->input()}";
//form
$form = new Form;
$form->code = "{$usrlabel->label()}{$usrinput->input()}"."<br>"."{$b}";

//<body> class
$body = new Body;
$body->code = $form->form();

//Running Our Webpage
$html = new Html;
$html->code = "{$body->body()}{$head->head()}";
$html->run();

?>
