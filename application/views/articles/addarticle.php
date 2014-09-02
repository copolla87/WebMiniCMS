<div class="container">
    <!-- add song form -->
    <div>
        <h3>Add an article</h3>
        
        <form action="<?php echo URL; ?>articles/addArticle" method="POST" enctype="multipart/form-data" role="form" class="form-horizontal">
            <div class="form-group">
            <label>Title</label><br>
            <input type="text" name="title" value="" required /><br>
            <label>Article</label><br>
            <textarea rows="4" cols="50" name="article" value="" required ></textarea><br>
            <label>Upload Image</label>
            <input type="file" name="photo" id="photo"><br>
            <button type="submit" class="btn btn-primary" name="submit_add_article">Save changes</button>
            <button type="reset" class="btn btn-default">Cancel</button>
            </div>
        </form>
    </div>
</div>