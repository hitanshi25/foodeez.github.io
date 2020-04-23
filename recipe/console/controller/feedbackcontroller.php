<?php 
	class FeedbackController extends Controller
	{
        private $tbl = 'feedback'; 
        public function loadview($action)
		{
			
			if($action == 'listdata')
			{
                $row = $this->getMasterData($this->tbl);
                include 'page/feedback/list.php';
            }
            
            if($action == "addform")
            {
                include 'page/feedback/form.php';
            }

            if($action == "add")
            {
                $data= $_POST;
                $this->insertData($this->tbl,$data);
                $this->redirect("index.php?ontroller=feedbackcontroller&action=listdata");
                
                
            }

            if($action == "editform")
            {
              
            }

            if($action == "edit")
            {
               
            }

            if($action == "delete")
            {
               
            }
		}
	}

