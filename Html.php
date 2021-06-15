<?php
class Html{
public $code;
public function run(){
echo "<html>{$this->code}</html>";
}}

class Head{
public $code;
public function head(){ 
return "<head>{$this->code}</head>";
}}

class Style{
public $csscode;
public function style(){ 
return "<style>{$this->csscode}</style>";
}}

class Title{
public $name;
public function title(){
return "<title>{$this->name}</title>";
}}

class Body{
public $code;
public function body(){
return "<body>{$this->code}</body>";
}}

class Div{
public $class;
public $code;
public function div(){
return "<div class=\"{$this->class}\">{$this->code}</div>";
}}

class Image{
public $id;
public $source;
public function img(){
return "<img id=\"{$this->id}\" src=\"{$this->source}\">";
}}

class Form{
public $action;
public $method;
public $code;
public function form(){
return "<form action=\"{$this->action}\" method=\"{$this->method}\">{$this->code}</form>";
}}

class Input{
public $name;
public $type;
public $value;
public function input(){
return "<input type=\"{$this->type}\" name=\"{$this->name}\" value=\"{$this->value}\">";
}}

class Label{
public $For;
public $text;
public function label(){
return "<label for=\"{$this->for}\">{$this->text}</label>";
}}

?>

