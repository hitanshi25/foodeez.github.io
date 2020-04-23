<?php 
	class UserController extends Controller
	{
        private $tbl = 'user'; 
        public function loadview($action)
		{
			
			if($action == 'listdata')
			{
                $row = $this->getMasterData($this->tbl);
                include 'page/user/list.php';
            }
            
            if($action == "addform")
            {
                include 'page/user/form.php';
            }

            if($action == "add")
            {
                
                $data= $_POST;
                $data['image'] =  $this-> uploadfile($_FILES,'f');
                $this->insertData($this->tbl,$data);
                $this->redirect("index.php?ontroller=usercontroller&action=listdata");  
                
            }

            if($action == "editform")
            {
              

                $row = $this->getSingleData($this->tbl,array("id" => $_REQUEST['id']));
                include 'page/user/form.php';

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
               $this->redirect("index.php?controller=usercontroller&action=listdata");
            }

            if($action == "delete")
            {
                $this->deleteData($this->tbl,array("id" => $_REQUEST['id']));
                $this->redirect("index.php?controller=usercontroller&action=listdata");
               
            }
		}
	}

