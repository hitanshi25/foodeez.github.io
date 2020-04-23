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
                            <a class="btn btn-primary" href="index.php?controller=bookcontroller&action=addform">
                                <i class="fa fa-plus"></i>ADD
                            </a>
                        </th>
                    </tr>
                  <tr>
                    <th>Sr no</th>
                    
                    <th>Link</th>
                    <th>Action</th>                    
                  </tr>
                </thead>
                
                 <tbody>
                  <?php
                  $sr=1;
                  if(!empty($row))
                  {
                  foreach($row as $key=>$val)
                  {
                    ?>
                    <tr>
                      <td><?php echo $sr; ?></td>
                      <!--<td><?php echo $val['name']; ?></td>
                       <td><img src="<?php echo $val['img']; ?>" style="height: 100px;width:100px;"></td>-->
                      <td><?php echo $val['link']; ?></td>
                       
                      <td>
                        <a href="index.php?controller=bookcontroller&action=editform&id=<?php echo $val['id']; ?>" class="btn btn-info"><i class="fa fa-pencil-square-o"></i></a>
                        <strong>|</strong>
                        <a href="index.php?controller=bookcontroller&action=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger" onclick="return confirmDelete();"><i class="fa fa-trash"></i></a>
                      </td>

                    </tr>
                 <?php  $sr++; }
               }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
          
        </div>