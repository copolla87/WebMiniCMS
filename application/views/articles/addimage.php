<div class="container">
    <!-- add song form -->
    <div>
        <h3>Add Image</h3>
        
        <form action="<?php echo URL; ?>articles/addImage" method="POST" enctype="multipart/form-data" role="form" class="form-horizontal">
            <div class="form-group">
            <label>Title</label><br>
            <input type="text" name="title" value="" required /><br>
            <label>Upload Image</label>
            <input type="file" name="image" id="image"><br>
            <button type="submit" class="btn btn-primary" name="submit_image">Save changes</button>
            <button type="reset" class="btn btn-default">Cancel</button>
            <?php echo $_SERVER['DOCUMENT_ROOT'] ; ?>
            </div>
        </form>
    </div>
</div>