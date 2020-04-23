<?php 
	class BlogController extends Controller
	{
        private $tbl = 'blog'; 
        public function loadview($action)
		{
			
			if($action == 'listdata')
			{
                $row = $this->getMasterData($this->tbl);
                include 'page/blog/list.php';
            }
            
            if($action == "addform")
            {
                include 'page/blog/form.php';
            }

            if($action == "add")
            {
                
                $data= $_POST;
                $data['image'] =  $this-> uploadfile($_FILES,'f');
                $this->insertData($this->tbl,$data);
                $this->redirect("index.php?ontroller=blogcontroller&action=listdata");  
                
            }

            if($action == "editform")
            {
              

                $row = $this->getSingleData($this->tbl,array("id" => $_REQUEST['id']));
                include 'page/blog/form.php';

            }

            if($action == "edit")
            {
                $data = $_POST;

               if($_FILES['f']['name'] == null)
               {
                $data['image'] = $_REQUEST['oldpath'];
               }
               else
               {
                $data['image'] =  $this-> uploadfile($_FILES,'f'); 
               }

               unset($data['oldpath']);
                
               $this->updateData($this->tbl,$data,array("id" => $_REQUEST['id']));
               $this->redirect("index.php?controller=blogcontroller&action=listdata");
            }

            if($action == "delete")
            {
                $this->deleteData($this->tbl,array("id" => $_REQUEST['id']));
                $this->redirect("index.php?controller=blogcontroller&action=listdata");
               
            }
		}
	}

