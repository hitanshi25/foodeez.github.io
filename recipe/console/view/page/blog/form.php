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
             
             <h1>ADD FORM</h1>
            <form method="post" action="index.php?controller=blogcontroller&action=add" enctype=multipart/form-data>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea name="description" class="form-control" required ></textarea>
                </div>
                 <div class="form-group">
                    <label>image:</label>
                    <input type="file" name="f" class="form-control" accept="image/*">
                </div>
                 <div class="form-group">
                    <label>Date:</label>
                    <input type="text" name="date" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label>Category Id:</label>
                    <input type="text" name="category_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="ADD" class="btn btn-info">
                </div>
                <?php } } 
            else{
            ?>
            <h1>ADD FORM</h1>
            <form method="post" action="index.php?controller=blogcontroller&action=add" enctype=multipart/form-data>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea name="description" class="form-control" required ></textarea>
                </div>
                 <div class="form-group">
                    <label>image:</label>
                    <input type="file" name="f" class="form-control" accept="image/*">
                </div>
                 <div class="form-group">
                    <label>Date:</label>
                    <input type="text" name="date" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label>Category Id:</label>
                    <input type="text" name="category_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="ADD" class="btn btn-info">
                </div>
            </form>
            
        </div>
    </div>
</div>

