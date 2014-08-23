<?php
class ToDoList {
	private $title = '';
	private $list = array();

  function __construct($title, $list) {
  	$this->title = $title;
    $this->list = $list;
  }

 	private function getList() {
 		$entireList = '';

 		//Add each list item
    foreach ($this->list as $index=>$item) {
    	$entireList .= "
				<li>
					<div class='item'>
						<h3>" .$item. "</h3>
						<span class='arrow'>~</span>
					</div>
					<div class='hover-container'>
						<span class='done btn'></span>
						<span class='delete btn'></span>
					</div>
				</li>
    	";
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
				<h1>".$this->title."</h1>
				<ul>".$this->getList()."</ul>
			</div>"
		);
	}
}
?>