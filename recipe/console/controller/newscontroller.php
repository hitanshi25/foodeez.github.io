<?php 
	class NewsController extends Controller
	{
        private $tbl = 'news'; 
        public function loadview($action)
		{
			
			if($action == 'listdata')
			{
                $row = $this->getMasterData($this->tbl);
                include 'page/news/list.php';
            }
            
            if($action == "addform")
            {
                include 'page/news/form.php';
            }

            if($action == "add")
            {
                
                $data= $_POST;
                $data['img'] =  $this-> uploadfile($_FILES,'m');
                $this->insertData($this->tbl,$data);
                //$this->redirect("index.php?ontroller=newscontroller&action=listdata");  
                
            }

            if($action == "editform")
            {
              

                $row = $this->getSingleData($this->tbl,array("id" => $_REQUEST['id']));
                include 'page/news/form.php';

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
                $data['img'] =  $this-> uploadfile($_FILES,'m'); 
               }

               unset($data['oldpath']);
                
               $this->updateData($this->tbl,$data,array("id" => $_REQUEST['id']));
               $this->redirect("index.php?controller=newscontroller&action=listdata");
            }

            if($action == "delete")
            {
                $this->deleteData($this->tbl,array("id" => $_REQUEST['id']));
                $this->redirect("index.php?controller=newscontroller&action=listdata");
               
            }
		}
	}
