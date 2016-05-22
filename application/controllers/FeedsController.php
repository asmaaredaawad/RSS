<?php

class FeedsController extends Zend_Controller_Action
{

    private $model = null;

    public function init()
    {
        /* Initialize action controller here */
         $this->model = new Application_Model_DbTable_Feed();
    }

    public function indexAction()
    {
       $paths=$this->model->listFeeds();
       
       foreach ($paths as $path) {
       		$path=$path['path'];
       	  	$channel = new Zend_Feed_Rss($path);
       }
       $this->view->paths=$channel;
    }

    public function addAction()
    {
        // action body
        $form = new Application_Form_Feeds();
		if($this->getRequest()->isPost()){
			if($form->isValid($this->getRequest()->getParams())){
				$data = $form->getValues();
				if ($this->model->addPath($data)){
					$this->redirect('feeds/index');
                }
			}

		}
		$this->view->form = $form;
    }


}



