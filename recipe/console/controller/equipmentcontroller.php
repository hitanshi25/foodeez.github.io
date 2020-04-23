<?php 
	class EquipmentController extends Controller
	{
        private $tbl = 'equipment'; 
        public function loadview($action)
		{
			
			if($action == 'listdata')
			{
                $row = $this->getMasterData($this->tbl);
                include 'page/equipment/list.php';
            }
            
            if($action == "addform")
            {
                include 'page/equipment/form.php';
            }

            if($action == "add")
            {
                
                $data= $_POST;
                
                $this->insertData($this->tbl,$data);
                $this->redirect("index.php?ontroller=equipmentcontroller&action=listdata");  
                
            }

            if($action == "editform")
            {
              

                $row = $this->getSingleData($this->tbl,array("id" => $_REQUEST['id']));
                include 'page/equipment/form.php';

            }

            if($action == "edit")
            {
                $data = $_POST;

                
               $this->updateData($this->tbl,$data,array("id" => $_REQUEST['id']));
               $this->redirect("index.php?controller=equipmentcontroller&action=listdata");
            }

            if($action == "delete")
            {
                $this->deleteData($this->tbl,array("id" => $_REQUEST['id']));
                $this->redirect("index.php?controller=equipmentcontroller&action=listdata");
               
            }
		}
	}

