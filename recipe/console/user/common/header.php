
 
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8">
		</div>
		<!--<?php
		if(isset($_SESSION['login']))
		{
		?>
		
		<div class="col-lg-4">
          <a class="btn" style="background: #fac564; color:white;" href="logout.php">Logout</a>
          <a class="btn" style="background: #fac564;color:white;" href="cart.php">Cart</a>
          <a class="btn" style="background: #fac564;color:white;" href="ing.php">Order</a>
          <a class="btn" style="background: #fac564;color:white;" href="add.php">Upload Recipe</a>
        </div>
	    <?php } 
	    else
	    {
	    	?>
		<div class="col-lg-4">
          <a class="btn" style="background: #fac564; color:white;" href="login.php">Login</a>
          
        </div>
	    <?php }
	    ?>-->


		<div class="col-lg-12">
			 <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>The<br><small>Foodeez</small></a>
			      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="oi oi-menu"></span> Menu
			      </button>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <center><ul class="navbar-nav ml-auto">
		          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
		          <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
		         
		         <?php
					if(isset($_SESSION['login']))
					{
				  ?>

		          <li class="nav-item"><a href="service.php" class="nav-link">Services</a></li>  
		          <li class="nav-item"><a href="recipe.php" class="nav-link">Recipes</a></li>
		          <li class="nav-item"><a href="chef.php" class="nav-link">Chef</a></li>
		          <li class="nav-item"><a href="plate.php" class="nav-link">Serving Suggestions</a></li>
				  <li class="nav-item"><a href="event.php" class="nav-link">Events</a></li>		         
		          <li class="nav-item"><a href="news.php" class="nav-link">News</a></li>	
		          <li class="nav-item"><a href="add.php" class="nav-link">Upload Recipes</a></li>	
		          <li class="nav-item"><a href="gallery.php" class="nav-link">Your Gallery</a></li> 
		          <li class="nav-item"><a href="cal.php" class="nav-link">Calorie Calculator</a></li>        
		          <li class="nav-item"><a href="ing.php" class="nav-link">Buy Ingredient</a></li>
		          <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
		          <li class="nav-item"><a href="book.php" class="nav-link">Buy Books</a></li>
		          <li class="nav-item"><a href="equipment.php" class="nav-link">Buy Equipments</a></li>
		          <li class="nav-item"><a href="tips.php" class="nav-link">Tips & Tricks</a></li>
		          <li class="nav-item"><a href="cont.php" class="nav-link">Contact Us</a></li>

                   <a class="btn" style="background: #fac564; color:white; height:30px; width:100px;" href="logout.php">Logout</a>
		          <?php } 
	   			 	else
	   				 {
	    		  ?>
					<div class="col-lg-4">
					
         			 <a class="btn" style="background: #fac564; color:white;  height:30px; width:100px;" href="login.php">Login</a>
          
        			</div>
	    			<?php }
	    			?>
		
		         
				  
		        </ul></center>
		      </div>
		</div>
	</div>	     
</div>