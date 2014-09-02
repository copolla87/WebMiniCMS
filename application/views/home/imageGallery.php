<div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Thumbnail Gallery</h1>
            </div>

            <?php foreach ($images as $image) { ?>
            
               <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="<?php echo $image->image ?>" alt="" style="height:300px; width:400px">
                </a>
            </div>
            <?php } ?>
        </div>