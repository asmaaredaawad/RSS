<?php

class Application_Model_DbTable_Feed extends Zend_Db_Table_Abstract
{
    protected $_name = 'feeds';

    function listFeeds(){
		return $this->fetchAll()->toArray();
	}
	
	function deleteFeed($id){
		return $this->delete('id='.$id);
	}
	function addPath($pathInfo){
		$row = $this->createRow();
		$row->name = $pathInfo['name'];
		$row->path = $pathInfo['path'];
		return $row->save();
	}
	

}

