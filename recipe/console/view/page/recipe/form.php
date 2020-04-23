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
            <form method="post" action="index.php?controller=recipecontroller&action=add" enctype=multipart/form-data style="background-image: url('bimg5.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                <br>
                <div class="form-group">
                    <label><h2><font color="white">Name:</font></h2></label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label><h2><font color="white">Description:</font></h2></label>
                    <input type="text" name="description" class="form-control" required>
                </div>

                <div class="form-group">
                    <label><h2><font color="white">File:</font></h2></label>
                    <input type="file" name="f" class="form-control">

                </div>   
                <label><h2><font color="white">Video:</font></h2></label>
                <div class="form-group">
                    <a class="btn btn-info" id="self_btn"><i class="fa fa-play"></i>Self Hosted</a>
                    <a class="btn btn-info" id="link_btn"><i class="fa fa-link"></i>Link</a>

                </div>
                
                <div class="form-group" id="self_hosted" style="display: none;">
                    <label><h2><font color="white">Video:</font></h2></label>
                    <input  type="file" name="v" class="form-control">

                </div> 

                <div class="form-group" id="video_link" style="display: none">
                    <label><h2><font color="white">Video:</font></h2></label>
                    <input type="text" name="video" class="form-control">
                </div>   

                <div class="form-group">
                    <label><h2><font color="white">Preview Image:</font></h2></label>
                    <input type="file" name="m" class="form-control" accept="image/*">
                </div>

                <div class="form-group">
                    <label><h2><font color="white">Select Sub Catregory</font></h2></label>
                    <select name="subcat_id" class="form-control">
                        <option value="0">Select Sub Category</option>
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
                    <label><h2><font color="white">Select Catregory</font></h2></label>
                    <select name="cat_id" class="form-control">
                        <option value="0">Select Category</option>
                        <?php
                            foreach($cat1 as $ckey => $cval) 
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
            <form method="post" action="index.php?controller=recipecontroller&action=edit" enctype=multipart/form-data style="background-image: url('bimg5.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                <div class="form-group">
                    <label><h2><font color="white">Name:</font></h2></label>
                    <input type="text" name="name" class="form-control" required value="<?php echo $val['name'] ?>">
                </div>

                <div class="form-group">
                    <label><h2><font color="white">Description:</font></h2></label>
                    <input type="text" name="description" class="form-control" required value="<?php echo $val['description'] ?>">
                </div>

                <div class="form-group">
                    <label><font color="white">Previous Image:</font></label>
                    <a href="<?php echo $val['img']; ?>" target="_blank">View</a>
                   

                </div>   


                 <div class="form-group">
                    <label><h2><font color="white">File:</font></h2></label>
                    <input type="file" name="f" class="form-control">

                    <input type="hidden" name="oldpath" value="<?php echo $val['img']; ?>">
                </div>         

                <div class="form-group">
                    <label><font color="white">Previous Video:</font></label>
                    <a href="<?php echo $val['video']; ?>" target="_blank">View</a>
                    
                </div>
               
                <label><h2><font color="white">Video:</font></h2></label>
               <div class="form-group">
                    <a class="btn btn-info" id="self_btn"><i class="fa fa-play"></i>Self Hosted</a>
                    <a class="btn btn-info" id="link_btn"><i class="fa fa-link"></i>Link</a>

                </div>

                <div class="form-group" id="self_hosted" style="display: none;">
                    <label><h2><font color="white">Video:</font></h2></label>
                    <input  type="file" name="v" class="form-control">

                </div> 

                <div class="form-group" id="video_link" style="display: none">
                    <label><h2><font color="white">Video:</font></h2></label>
                    <input type="text" name="video" class="form-control" value="<?php echo $val['video']; ?>">
                </div>   
    

                <div class="form-group">
                    <label><font color="white">Previous Preview Image:</font></label>
                   <!-- <a href="<?php echo $val['img']; ?>" target="_blank">View</a>-->
                   <input type="text" name="m" value="<?php echo $val['pre_img']; ?>" style="width: 100px, height:100px">

                </div>   


                 <div class="form-group">
                    <label><h2><font color="white">Preview Image:</font></h2></label>
                    <input type="file" name="m" class="form-control">

                    <input type="hidden" name="preoldpath" value="<?php echo $val['pre_img']; ?>">
                </div>         


                <div class="form-group">
                    <label><h2><font color="white">Select Sub Catregory</font></h2></label>
                    <select name="subcat_id" class="form-control">
                        <option value="0">Select Sub Category</option>
                        <?php
                            foreach($cat as $ckey => $cval) 
                            {
                                if($cval['id'] == $val['subcat_id'])
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
                    <label><h2><font color="white">Select Catregory</font></h2></label>
                    <select name="cat_id" class="form-control">
                        <option value="0">Select Category</option>
                        <?php
                            foreach($cat1 as $ckey => $cval) 
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

