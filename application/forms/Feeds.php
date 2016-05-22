<?php

class Application_Form_Feeds extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */

        $name = new Zend_Form_Element_Text('name');
		$name->setRequired();
		$name->setLabel('name');
		$name->setAttrib('class', 'form-control');
		$name->setAttrib ( 'placeholder', 'Add name of rss' );

    	$path = new Zend_Form_Element_Text('path');
		$path->setRequired();
		$path->setLabel('path');
		$path->setAttrib('class', 'form-control');
		$path->setAttrib ( 'placeholder', 'Add new path' );

	 	$id = new Zend_Form_Element_Hidden('material_id');
		
		$add = new Zend_Form_Element_Submit('add');
		$add->setAttrib('class', 'btn btn-primary');
		
		$this->addElements(array($id,$name,$path,$add));

	}


}

