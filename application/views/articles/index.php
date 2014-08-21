<div class="container">
    <h2>You are in the View: application/views/song/index.php (everything in this box comes from that file)</h2>
    
    <!-- main content output -->
    <div>
        <h3>List of articles</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Article</td>
                </tr>
            </thread>
            <tbody>
                <?php foreach ($articles as $article) { ?>
                    <tr>
                        <td><?php if (isset($article->id)) echo $article->id; ?></td>
                        <td><?php if (isset($article->title)) echo $article->title; ?></td>
                        <td><?php if (isset($article->article)) echo $article->article; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
