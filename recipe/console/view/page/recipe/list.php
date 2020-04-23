<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
             
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>
                            <a class="btn btn-primary" href="index.php?controller=recipecontroller&action=addform">
                                <i class="fa fa-plus"></i>ADD
                            </a>
                        </th>
                    </tr>
                  <tr>
                   <th>Sr no</th>                
                   <th>Name</th>                
                   <th>Description</th>                
                   <th>File / Image</th>
                   <th>Video</th>
                   <th>Preview Image</th>  
                   <th>Category</th>          
                   <th>SubCategory</th>
                   <th>Action</th>                
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $srno = 1;
                    if(!empty($row))
                    {
                      foreach($row as $key => $val)
                      {
                        $cat = $this->getSingleData('category' , array("id" => $val['recipe_cat_id']));

                  ?>
                  <tr>
                    <td><?php echo $srno; ?></td>
                    <td><?php echo $val['recipe_name']; ?></td>
                    <td><?php echo $val['recipe_description']; ?></td>
                    <td><a href="<?php echo $val['recipe_img']; ?>" target="_blank">View</a>
                      </td>
                    <?php
                    if($val['recipe_video_type'] == "selfhosted")
                    { 
                    ?>
                    
                    <td>
                      <video src="<?php echo $val['recipe_video']; ?>" width="320" height="240" controls>
  
                      </video>
                    </td>

                  <?php } 
                  else
                  {
                  ?>

                  <td><a class="popup-youtube" href="<?php echo $val['recipe_video']; ?>">Open YouTube video</a></td>

                <?php } ?>
                    
                    <td><img src="<?php echo $val['recipe_pre_img']; ?>" style="height: 100px;width:100px;"></td>
                    <td><?php echo $cat[0]['name']; ?></td>
                    
                    <td><?php echo $val['subcategory_name']; ?></td>
                    <td>
                      <a href="index.php?controller=recipecontroller&action=editform&id=<?php echo $val['recipe_id'] ?>" class="btn btn-info"><i class="fa fa-pencil-square-o"></i></a>
                      <strong>|</strong>
                      <a href="index.php?controller=recipecontroller&action=delete&id=<?php echo $val['recipe_id'] ?>" class="btn btn-danger" onclick="return confirmDelete();"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>

                <?php $srno++; } }  ?>
                </tbody>
              </table>
            </div>
          </div>
          
        </div>