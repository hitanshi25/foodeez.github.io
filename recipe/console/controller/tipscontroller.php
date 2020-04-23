<?php 
	class TipsController extends Controller
	{
        private $tbl = 'tips'; 
        public function loadview($action)
		{
			
			if($action == 'listdata')
			{
                $row = $this->getMasterData($this->tbl);
                include 'page/tips/list.php';
            }
            
            if($action == "addform")
            {
                include 'page/tips/form.php';
            }

            if($action == "add")
            {
                
                $data= $_POST;
                
                $this->insertData($this->tbl,$data);
                $this->redirect("index.php?ontroller=tipscontroller&action=listdata");  
                
            }

            if($action == "editform")
            {
              

                $row = $this->getSingleData($this->tbl,array("id" => $_REQUEST['id']));
                include 'page/tips/form.php';

            }

            if($action == "edit")
            {
                $data = $_POST;

               
               $this->updateData($this->tbl,$data,array("id" => $_REQUEST['id']));
               $this->redirect("index.php?controller=tipscontroller&action=listdata");
            }

            if($action == "delete")
            {
                $this->deleteData($this->tbl,array("id" => $_REQUEST['id']));
                $this->redirect("index.php?controller=tipscontroller&action=listdata");
               
            }
		}
	}

