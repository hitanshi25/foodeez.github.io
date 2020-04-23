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
            <form method="post" action="index.php?controller=ingredientcontroller&action=add" enctype=multipart/form-data>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Hindi Name:</label>
                    <input type="text" name="hindiname" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Amount:</label>
                    <input type="text" name="amount" class="form-control" required>
                </div>
            
                <div class="form-group">
                    <label>Unit:</label>
                    <input type="text" name="unit" class="form-control" required>
                </div>


                <div class="form-group">
                    <label>Select Category</label>
                    <select name="type_id" class="form-control">
                        <option value="0">Select Category</option>
                        <?php
                            foreach($cat as $ckey => $cval) 
                            {
                                ?>
                            <option value="<?php echo $cval['id']; ?>"><?php echo $cval['name']; ?></option>
                           <?php  }
                        ?>
                    </select>
                </div>
                    
                   <div class="form-group">
                    <label><h2><font color="black">Image:</font></h2></label>
                    <input type="file" name="m" class="form-control" accept="image/*">
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
            <form method="post" action="index.php?controller=ingredientcontroller&action=edit" enctype=multipart/form-data>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" required value="<?php echo $val['name'] ?>">
                </div>

                <div class="form-group">
                    <label>Hindi Name:</label>
                    <input type="text" name="hindiname" class="form-control" required value="<?php echo $val['hindiname'] ?>">
                </div>

                <div class="form-group">
                    <label>Amount:</label>
                    <input type="text" name="amount" class="form-control" required value="<?php echo $val['amount'] ?>">
                </div>
                
                <div class="form-group">
                    <label>Unit:</label>
                    <input type="text" name="unit" class="form-control" required value="<?php echo $val['unit'] ?>">
                </div>

                <div class="form-group">
                    <label>Select Catregory</label>
                    <select name="type_id" class="form-control">
                        <option value="0">Select Category</option>
                        <?php
                            foreach($cat as $ckey => $cval) 
                            {
                                if($cval['id'] == $val['type_id'])
                                {
                                    $sel = 'selected';
                                }
                                else
                                {
                                    $sel = "";
                                }
                                ?>
                            <option value="<?php echo $cval['id']; ?>" <?php echo $sel; ?>><?php echo $cval['name']; ?></option>
                           <?php  }
                        ?>
                    </select>
                </div>

                 <div class="form-group">
                    <label><font color="black">Previous Image:</font></label>
                   
                   <input type="file" name="m" value="<?php echo $val['img']; ?>" style="width: 100px, height:100px">

                </div>   


                 <div class="form-group">
                    <label><h2><font color="black">Image:</font></h2></label>
                    <input type="file" name="m" class="form-control">

                    <input type="hidden" name="oldpath" value="<?php echo $val['img']; ?>">
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

