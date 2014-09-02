   <div class="container">
    <div>
        <h3>Images list</h3>
        <table class="table">
            <thead>
                <th>Image name</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($images as $image) {?>
                        <td>
                            <?php echo $image->title;?>
                        </td>
                        <td>
                            <form action="" method="post">
                                <button type="submit" class="btn btn-primary" name="delete_image">Delete</button>
                                <input type="hidden" name="id" value="<?php echo $image->id;?>"></input>
                            </form>
                        </td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>