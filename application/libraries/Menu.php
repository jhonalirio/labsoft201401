<?php if ( ! defined('BASEPATH')) exit('No se permite acceso directo al script');
	class Menu{
		private $arr_menu;
	       public function _construct($arr){
	    	$this->arr_menu = $arr;
	       }
	    public function construirmenu(){
		    $ret_menu="<nav><ul>";
		    {
		    $ret_menu.="<li></li>";
	        }  
		    $ret_menu .="</ul></nav>";
		     return $ret_menu;
        }
	}
?> 