<?php 
  class IngredientController extends Controller
  {
       private $tbl = "ingredient";
       public function loadview($action)
       {
          if($action == "listdata")
          {
            $row = $this->innerJoin($this->tbl,'ingredienttype','type_id','id');
            //print_r($row);
            include 'page/ingredient/list.php';
          }

          if($action == "addform")
          {
           
           $cat = $this->getMasterData('ingredienttype');
            include 'page/ingredient/form.php';
          }

          if($action == "add")
          {
                $data= $_POST;
                
                $this->insertData($this->tbl,$data);
                 $data['img'] =  $this-> uploadfile($_FILES,'m'); 
                $this->redirect("index.php?controller=ingredientcontroller&action=listdata");  
                
              
          }

          if($action == "editform")
          {
               $row = $this->getSingleData($this->tbl , array("id" => $_REQUEST['id']));
              $cat = $this->getMasterData('ingredienttype');
              

               include 'page/ingredient/form.php';
                  
                //$this->redirect("index.php?controller=subcategorycontroller&action=addform");               
              
          }

          if($action == "edit")
          {
                $data= $_POST;
                if($_FILES['m']['name'] == null)
               {
                $data['img'] = $_REQUEST['oldpath'];
               }
               else
               {
                $data['img'] =  $this-> uploadfile($_FILES,'m'); 
               }

               unset($data['oldpath']);
               
                $this->updateData($this->tbl,$data , array("id" => $_REQUEST['id']));
                  
                $this->redirect("index.php?controller=ingredientcontroller&action=listdata");                 
              
          }

           if($action == "delete")
            {
                $this->deleteData($this->tbl,array("id" => $_REQUEST['id']));
                $this->redirect("index.php?controller=ingredientcontroller&action=listdata");
               
            }
       }
  }

