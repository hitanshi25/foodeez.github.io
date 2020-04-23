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
            if(isset($_REQUEST['id']))
            {

                foreach ($row as $val) 
                {
                    
           ?>
            <h1>EDIT FORM</h1>
            <form method="post" action="index.php?controller=categorycontroller&action=edit" enctype=multipart/form-data >
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" required value="<?php echo $val['name'] ?>">
                </div>
                
                <div class="form-group">
                    <input type="submit" value="ADD" class="btn btn-info">
                </div>
                <input type="hidden"  name="id" value="<?php echo $val['id']; ?>">
            </form>
            <?php } } 
            else{
            ?>
            <h1>ADD FORM</h1>
            <form method="post" action="index.php?controller=categorycontroller&action=add" enctype=multipart/form-data >
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <input type="submit" value="ADD" class="btn btn-info">
                </div>
            </form>
            <?php
        }
        
        ?> 
        </div>
    </div>
</div>

