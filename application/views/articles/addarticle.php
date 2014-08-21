<div class="container">
    <h2>You are in the View: application/views/song/addarticle.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div>
        <h3>Add an article</h3>
        
        <form action="<?php echo URL; ?>articles/addArticle" method="POST">
            <label>Title</label>
            <input type="text" name="title" value="" required />
            <label>Article</label>
            <input type="text" name="article" value="" required />
            <input type="submit" name="submit_add_article" value="Submit" />
        </form>
    </div>
</div>