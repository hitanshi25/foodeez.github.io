<?php 
	class SubcategoryController extends Controller
	{
       private $tbl = "subcategory";
       public function loadview($action)
       {
          if($action == "listdata")
          {
            $row = $this->innerJoin($this->tbl,'category','cat_id','id');
            //print_r($row);
            include 'page/subcategory/list.php';
          }

          if($action == "addform")
          {
           
           $cat = $this->getMasterData('category');
            include 'page/subcategory/form.php';
          }

          if($action == "add")
          {
                $data= $_POST;
                
                $this->insertData($this->tbl,$data);
                  
                $this->redirect("index.php?controller=subcategorycontroller&action=listdata");  
                
              
          }

          if($action == "editform")
          {
               $row = $this->getSingleData($this->tbl , array("id" => $_REQUEST['id']));
              
               $cat = $this->getMasterData('category');

               include 'page/subcategory/form.php';
                  
                //$this->redirect("index.php?controller=subcategorycontroller&action=addform");               
              
          }

          if($action == "edit")
          {
                $data= $_POST;
                
                
                $this->updateData($this->tbl,$data , array("id" => $_REQUEST['id']));
                  
                $this->redirect("index.php?controller=subcategorycontroller&action=listdata");                 
              
          }

           if($action == "delete")
            {
                $this->deleteData($this->tbl,array("id" => $_REQUEST['id']));
                $this->redirect("index.php?controller=subcategorycontroller&action=listdata");
               
            }
       }
	}

