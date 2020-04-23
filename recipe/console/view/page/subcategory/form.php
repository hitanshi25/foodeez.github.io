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
            <form method="post" action="index.php?controller=subcategorycontroller&action=add" enctype=multipart/form-data>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Select Catregory</label>
                    <select name="cat_id" class="form-control">
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
            <form method="post" action="index.php?controller=subcategorycontroller&action=edit" enctype=multipart/form-data>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" required value="<?php echo $val['name'] ?>">
                </div>

                <div class="form-group">
                    <label>Select Catregory</label>
                    <select name="cat_id" class="form-control">
                        <option value="0">Select Category</option>
                        <?php
                            foreach($cat as $ckey => $cval) 
                            {
                                if($cval['id'] == $val['cat_id'])
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
                    <input type="submit" value="ADD" class="btn btn-info">
                    <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
                </div>

            </form>

    <?php } } ?>
         
            
        </div>
    </div>
</div>

