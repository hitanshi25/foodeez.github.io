<?php 
	class OrdermasterController extends Controller
	{
        private $tbl = 'ordermaster'; 
        public function loadview($action)
		{
			
			if($action == 'listdata')
			{
                $row = $this->getMasterData($this->tbl);
                include 'page/ordermaster/list.php';
            }
            
            if($action == "addform")
            {
                include 'page/ordermaster/form.php';
            }

            if($action == "add")
            {
                
                $data= $_POST;
                $this->insertData($this->tbl,$data);
                $this->redirect("index.php?ontroller=ordermastercontroller&action=listdata");  
                
            }

            if($action == "editform")
            {
              

                $row = $this->getSingleData($this->tbl,array("id" => $_REQUEST['id']));
                include 'page/ordermaster/form.php';

            }

            if($action == "edit")
            {
                $data = $_POST;

               $this->updateData($this->tbl,$data,array("id" => $_REQUEST['id']));
               $this->redirect("index.php?controller=ordermastercontroller&action=listdata");
            }

            if($action == "delete")
            {
                $this->deleteData($this->tbl,array("id" => $_REQUEST['id']));
                $this->redirect("index.php?controller=ordermastercontroller&action=listdata");
               
            }
		}
	}

