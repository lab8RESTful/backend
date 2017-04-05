<?php

class Menu extends MY_Model {

	// constructor
	function __construct()
	{
		parent::__construct();
	}

	function getMenus() {
	    $dishes = array();
	    foreach ($this->all() as $dish) {
	        $dish[] = array(
	            "name" => $dish->name,
                "description" => $dish-> description,
                "price" => $dish->price,
                "picture" => $dish->picture,
                "category" => $dish->category
            );
        }
    }

}
