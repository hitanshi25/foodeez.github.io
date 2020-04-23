<?php 
	class BookController extends Controller
	{
        private $tbl = 'book'; 
        public function loadview($action)
		{
			
			if($action == 'listdata')
			{
                $row = $this->getMasterData($this->tbl);
                include 'page/book/list.php';
            }
            
            if($action == "addform")
            {
                include 'page/book/form.php';
            }

            if($action == "add")
            {
                
                $data= $_POST;
                
                $this->insertData($this->tbl,$data);
                $this->redirect("index.php?ontroller=bookcontroller&action=listdata");  
                
            }

            if($action == "editform")
            {
              

                $row = $this->getSingleData($this->tbl,array("id" => $_REQUEST['id']));
                include 'page/book/form.php';

            }

            if($action == "edit")
            {
                $data = $_POST;

                
               $this->updateData($this->tbl,$data,array("id" => $_REQUEST['id']));
               $this->redirect("index.php?controller=bookcontroller&action=listdata");
            }

            if($action == "delete")
            {
                $this->deleteData($this->tbl,array("id" => $_REQUEST['id']));
                $this->redirect("index.php?controller=bookcontroller&action=listdata");
               
            }
		}
	}

