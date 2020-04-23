<!-- 
    name attribute must be same as database fileld name
 -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i>
        Form
    </div>
    <div class="col-lg-10">
        <div class="card-body">
             
             <?php
             if(!isset($_REQUEST['id']))
             {
             ?>
             <h1>ADD FORM</h1>
            <form method="post" action="index.php?controller=bookcontroller&action=add" enctype=multipart/form-data>
                <br>
                


                <div class="form-group">
                    <label><h2><font color="black">Buy Links:</font></h2></label>
                    <input type="text" name="link" class="form-control">
                </div>   
                          
                
                <div class="form-group">
                    <input type="submit" value="ADD" class="btn btn-info">
                </div>

            </form>

        <?php } 
        else
        {
        ?>
            <h1>Edit FORM</h1>
            <?php
            foreach($row as $key=>$val) 
            {
            ?>
            <form method="post" action="index.php?controller=bookcontroller&action=edit" enctype=multipart/form-data >
                
                <div class="form-group">
                    <label><font color="black">Previous Link:</font></label>
                    <a href="<?php echo $val['link']; ?>" target="_blank">View</a>
                    
                </div>
               
                

                <div class="form-group">
                    <label><h2><font color="black">Book Link:</font></h2></label>
                    <input type="text" name="link" class="form-control" value="<?php echo $val['link']; ?>">
                </div>   
    

                <div class="form-group">
                    <input type="submit" value="ADD" class="btn btn-info">
                    <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
                </div>

            </form>

    <?php } } ?>
         
            
        </div>
    </div>
</div>

