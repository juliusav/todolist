<?php
class ToDoList {
	private $title = '';
	private $list = array();
	private $color = '';
	private $shades = array();

  function __construct($title, $list, $color) {
  	$this->title = $title;
    $this->list = $list;
    $this->color = $color;
    $this->shades = $this->getShades(hex2rgb($color));
  }

  private function getShades($color) {
  	$shadesArr = array();

  	$r = ($color[0]%256) + 0;
  	$g = ($color[1]%256) + 0;
  	$b = ($color[2]%256) + 0;

  	for ($i = 0; $i < 3; $i++) {
  		$r += 25;
  		$g += 25;
  		$b += 25;
  		$shadesArr[] = 'rgb('.$r.','.$g.','.$b.')';
  	}

  	return $shadesArr;
  }

 	private function getList() {
 		$entireList = '';
 		$shadeCounter = 0;
 		$shadeDirection = 'up';

 		//Add each list item
    foreach ($this->list as $index=>$item) {
    	$entireList .= "
				<li>
					<div class='item' style='background-color:".$this->shades[$shadeCounter].";'>
						<h3>" .$item. "</h3>
						<span class='arrow'><i class='fa fa-chevron-right'></i></span>
					</div>
					<div class='hover-container'>
						<span class='delete btn'><i class='fa fa-times'></i></span>
						<span class='done btn'><i class='fa fa-check'></i></span>
					</div>
				</li>
    	";


    	if ($shadeDirection === 'up') {
    		$shadeCounter = ($shadeCounter < 2) ? $shadeCounter+1 : 0;

    		if ($shadeCounter === 0) {
    			$shadeCounter = 1;
    			$shadeDirection = 'down';
    		}
    	} else {
    		$shadeCounter = ($shadeCounter > 0) ? $shadeCounter-1 : -1;

    		if ($shadeCounter === -1) {
    			$shadeCounter = 1;
    			$shadeDirection = 'up';
    		}
    	}
    }

		//Button for adding new item
		$entireList .= "
			<li>
				<div class='addBtn'>
					<h3>Add item +</h3>
				</div>
			</li>
		"; 

    return $entireList;
  }

	function generate() {
		echo (
			"<div class='box'>
				<h1 style='background-color:".$this->color.";'>".$this->title."</h1>
				<ul>".$this->getList()."</ul>
			</div>"
		);
	}
}

/*
 * Helper function (for converting hex to RGB) used from:
 * http://bavotasan.com/2011/convert-hex-color-to-rgb-using-php/
 */

function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
?>