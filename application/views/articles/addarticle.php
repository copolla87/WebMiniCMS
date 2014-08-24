<div class="container">
    <h2>You are in the View: application/views/song/addarticle.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div>
        <h3>Add an article</h3>
        
        <form action="<?php echo URL; ?>articles/addArticle" method="POST" enctype="multipart/form-data">
            <label>Title</label><br>
            <input type="text" name="title" value="" required /><br>
            <label>Article</label><br>
            <textarea rows="4" cols="50" name="article" value="" required ></textarea><br>
            <label>Upload Image</label>
            <input type="file" name="photo" id="file"><br>
            <input type="submit" name="submit_add_article" value="Submit" />
        </form>
    </div>
</div>