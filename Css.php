<?php
include "Properties.php";
class ImageCSS extends Properties{
public $id;
public $class;
public function img(){
return <<<EOD
#{$this->id}{
width:{$this->width};
height:{$this->height};
border:{$this->border};
}
EOD;
}}

?>
