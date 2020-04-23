<?php 
	class PlateController extends Controller
	{
        private $tbl = 'plate'; 
        public function loadview($action)
		{
			
			if($action == 'listdata')
			{
                $row = $this->getMasterData($this->tbl);
                include 'page/plate/list.php';
            }
            
            if($action == "addform")
            {
                include 'page/plate/form.php';
            }

            if($action == "add")
            {
                
                $data= $_POST;
                $data['img'] =  $this-> uploadfile($_FILES,'m');
                $this->insertData($this->tbl,$data);
                $this->redirect("index.php?ontroller=platecontroller&action=listdata");  
                
            }

            if($action == "editform")
            {
              

                $row = $this->getSingleData($this->tbl,array("id" => $_REQUEST['id']));
                include 'page/plate/form.php';

            }

            if($action == "edit")
            {
                $data = $_POST;

               if($_FILES['m']['name'] == null)
               {
                $data['img'] = $_REQUEST['oldpath'];
               }
               else
               {
                $data['img'] =  $this-> uploadfile($_FILES,'f'); 
               }

               unset($data['oldpath']);
                
               $this->updateData($this->tbl,$data,array("id" => $_REQUEST['id']));
               $this->redirect("index.php?controller=platecontroller&action=listdata");
            }

            if($action == "delete")
            {
                $this->deleteData($this->tbl,array("id" => $_REQUEST['id']));
                $this->redirect("index.php?controller=platecontroller&action=listdata");
               
            }
		}
	}

