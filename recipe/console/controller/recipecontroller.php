<?php 
	class RecipeController extends Controller
	{
        private $tbl = 'recipe'; 
        public function loadview($action)
		{
			
			if($action == 'listdata')
			{
              $row = $this->innerJoin($this->tbl,'subcategory','subcat_id','id');
              
              //print_r($row);
                //$row = $this->getMasterData($this->tbl);
                include 'page/recipe/list.php';
            }
            
            if($action == "addform")
            {
                $cat = $this->getMasterData('subcategory');
                $cat1 = $this->getMasterData('category');
                include 'page/recipe/form.php';
            }

            if($action == "add")
            {
                
                $data= $_POST;
                $data['img'] =  $this-> uploadfile($_FILES,'f');
                $data['pre_img'] =  $this-> uploadfile($_FILES,'m');

                if($_FILES['v']['name'] == null)
                {
                  $data['video'] = $_REQUEST['video'];
                  $data['video_type'] = 'link';
                }
                else
                {
                  $data['video'] =  $this-> uploadfile($_FILES,'v');
                  $data['video_type'] = 'selfhosted';
                }
                $this->insertData($this->tbl,$data);
                //$this->redirect("index.php?controller=recipecontroller&action=listdata");  
                
            }

            if($action == "editform")
            {
              

                $row = $this->getSingleData($this->tbl,array("id" => $_REQUEST['id']));
                $cat = $this->getMasterData('subcategory');
                $cat1 = $this->getMasterData('category');
                include 'page/recipe/form.php';

            }

            if($action == "edit")
            {
                $data = $_POST;

               if($_FILES['f']['name'] == null)
               {
                $data['img'] = $_REQUEST['oldpath'];
               }
               else
               {
                $data['img'] =  $this-> uploadfile($_FILES,'f'); 
               }

               if($_FILES['m']['name'] == null)
               {
                $data['pre_img'] = $_REQUEST['preoldpath'];
               }
               else
               {
                $data['pre_img'] =  $this-> uploadfile($_FILES,'m'); 
               }

               if($_FILES['v']['name'] == null)
                {
                  $data['video'] = $_REQUEST['video'];
                  $data['video_type'] = 'link';
                }
                else
                {

                  if($_FILES['v']['name'] == null)
                  {
                    $data['video'] = $_REQUEST['video'];
                    $data['video_type'] = 'selfhosted';
                  }
                  else
                  {
                    $data['video'] =  $this-> uploadfile($_FILES,'v');
                    $data['video_type'] = 'selfhosted';
                  }
                  
                }

               unset($data['oldpath']);
               unset($data['preoldpath']);
                
               $this->updateData($this->tbl,$data,array("id" => $_REQUEST['id']));
               //$this->redirect("index.php?controller=recipecontroller&action=listdata");
            }

            if($action == "delete")
            {
                $this->deleteData($this->tbl,array("id" => $_REQUEST['id']));
                $this->redirect("index.php?controller=recipecontroller&action=listdata");
               
            }
		}
	}

