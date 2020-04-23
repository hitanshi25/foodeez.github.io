<?php 
require 'config.php';

	class Db 
	{
		public $con;
		public function __construct( )
		{
				//$this->con = connect();
		}

		public function connect()
		{
			$this->con = mysqli_connect(HOST,USER,PASS,DB);
				if(!$this -> con)
				{
					echo "Error:".mysqli_error($this->con);
				}

				return $this->con;
		}
		public function checkunique($tbl,$checkdata)
		{
			//$this -> getSingleData($tbl,$checkdata);

			
			if( $this -> getSingleData($tbl,$checkdata))
			{
				
				return true;
			}
			else
			{
				return false;
			}
		}

		public function insertData($tbl,$data,$checkempty=null,$checkdata = null)
		{
			
			if($checkempty)
			{
				
				if($this ->checkunique($tbl,$checkdata))
				{
					
					return false;

				}
				else
				{
					echo $query = "insert into " . $tbl . " (" .implode(",",array_keys($data)).") values "."('".implode("','",array_values($data))."')";				
				
						$res = mysqli_query($this->con,$query);
						if(!$res)
						{
							echo mysqli_error($this->con);
						}
						else
						{
							return true;
						}

						
				}
			}
			else
			{
				$query = "insert into " . $tbl . " (" .implode(",",array_keys($data)).") values "."('".implode("','",array_values($data))."')";	

				
				

				
						$res = mysqli_query($this->con,$query);
						if(!$res)
						{
							echo mysqli_error($this->con);
						}
						else
						{
							return true;
						}

						
			}

			

		}

		public function updateData($tbl,$data,$pk)
		{
			$query = "update ". $tbl ." set ";

			foreach($data as $key=>$value)
			{
				$query.= $key." = "."'".$value."'"." , ";
			}

			$query = rtrim($query," , ");
			$query .= " where ";

			foreach($pk as $key => $value)
			{
				$query .= $key ." = "  ."'".$value."'". " AND ";
			}
			$query = rtrim($query," AND ");
			

			$res = mysqli_query($this->con,$query);
			if(!$res)
			{
				echo mysqli_error($this->con);
			}
			else
			{
				return true;
			}
			
		}

		public function deleteData($tbl,$pk)
		{
			$query = "delete from ". $tbl . "  ";

			
			$query .= " where ";

			foreach($pk as $key => $value)
			{
				$query .= $key ." = "  ."'".$value."'". " AND ";
			}
			$query = rtrim($query," AND ");
			

			$res = mysqli_query($this->con,$query);
			if(!$res)
			{
				echo mysqli_error($this->con);
			}
			else
			{
				return true;		
			}

		}

		public function getData($query)
		{
			$data = array();
			$res = mysqli_query($this->con,$query);

			
			if(mysqli_num_rows($res) >= 1)
			{
				while($row = mysqli_fetch_assoc($res))
				{
					$data [] =  $row;
					
				}	

				return $data;	
			}
			else
			{
				return false;
			}
			

			

			
		}

		
		public function getMasterData($tbl)
		{
			//$data = array();
			$query = "select * from ".$tbl ;
			return $this->getdata($query);
			
		}

		public function getSingleData($tbl,$pk)
		{
			$data = array();
			$query = "select * from " . $tbl ." where " ;

			foreach($pk as $key => $value)
			{
				$query .= $key ." = "  ."'".$value."'". " AND ";
			}
			$query = rtrim($query," AND ");
            $res = mysqli_query($this->con,$query);

			return $this->getdata($query);
		}

		public function innerJoin($left,$right,$lid,$rid,$join = null , $fldname = null , $fldval = null)
		{
			if($join == null)
			{
				$join = "INNER";
			}

			$data = array();
			$s = "";
			$res = mysqli_query($this->con,"DESCRIBE ". $left);
			while($row = mysqli_fetch_assoc($res))
			{
				$s .= $left.".".$row['Field'] ." as ". $left."_".$row['Field'] ." , ";
			}

			$res = mysqli_query($this->con,"DESCRIBE ". $right);
			while($row = mysqli_fetch_assoc($res))
			{
				$s .= $right.".".$row['Field'] ." as ". $right."_".$row['Field'] ." , ";
			}

			
			 $s = rtrim($s," , ");


			 $query =" select " . $s . " from ". $left . " " . $join . " JOIN ". $right . " ON " . $left.".".$lid ." = " .$right.".".$rid;

			 if($fldname)
			 {
			 	 $query =" select " . $s . " from ". $left . " " . $join . " JOIN ". $right . " ON " . $left.".".$lid ." = " .$right.".".$rid . " where ".$fldname ." = ".$fldval;
			 }
			 
			$res = mysqli_query($this->con,$query);

			return $this->getdata($query);


			
		}


		public function multiple_join($id = null)
		{

			$s = "";
			$left = "ordermaster";
			$res = mysqli_query($this->con,"DESCRIBE ". $left);
			while($row = mysqli_fetch_assoc($res))
			{
			$s .= $left.".".$row['Field'] ." as ". $left."_".$row['Field'] ." , ";
			}

			$left = "orderdetail";
			$res = mysqli_query($this->con,"DESCRIBE ". $left);
			while($row = mysqli_fetch_assoc($res))
			{
			$s .= $left.".".$row['Field'] ." as ". $left."_".$row['Field'] ." , ";
			}

			$left = "ingredient";
			$res = mysqli_query($this->con,"DESCRIBE ". $left);
			while($row = mysqli_fetch_assoc($res))
			{
			$s .= $left.".".$row['Field'] ." as ". $left."_".$row['Field'] ." , ";
			}

			$left = "ingredienttype";
			$res = mysqli_query($this->con,"DESCRIBE ". $left);
			while($row = mysqli_fetch_assoc($res))
			{
				$s .= $left.".".$row['Field'] ." as ". $left."_".$row['Field'] ." , ";
			}

			$s = rtrim($s," , ");




			if($id)
			{
			$query= "select " .$s. "
					FROM  ordermaster
					        INNER JOIN orderdetail
					        ON orderdetail.ordermaster_id = ordermaster.id
					        INNER JOIN ingredient
					        ON ingredient.id = orderdetail.ing_id

					        INNER JOIN ingredienttype
					        ON ingredienttype.id = ingredient.type_id where user_id = ".$id."
					       
					";
					}
					else
					{
					$query= "select " .$s. "
					FROM  ordermaster
					        INNER JOIN orderdetail
					        ON orderdetail.ordermaster_id = ordermaster.id
					        INNER JOIN ingredient
					        ON ingredient.id = orderdetail.ing_id

					        INNER JOIN ingredienttype
					        ON ingredienttype.id = ingredient.type_id      
					";
					}

					$res = mysqli_query($this->con,$query);

					return $this->getdata($query);


					}


	}

	
	

?>
