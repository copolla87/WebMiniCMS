  <div class="container">
    <div id="this-carousel-id" class="carousel slide" ><!-- class of slide for animation -->
  <div class="carousel-inner">
    <div class="item active"><!-- class of active since it's the first item -->
      <img src="http://placehold.it/1200x480" alt="" />
      <div class="carousel-caption">
        <p>Caption text here</p>
      </div>          
    </div>

    <?php foreach ($articles as $article) { ?>
    <div class="item">
      <img src="<?php
        echo $article->photo
       ?>" style="height:480px; width:1200px"/>
      <div class="carousel-caption">
        <p><?php echo $article->title;?></p>
      </div>
    </div>
    <?php } ?>
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->
  </div>  
  <div class="container">
    <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<p><br>
    <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<p><br>
    <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<p><br>
    <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<p><br>
    <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<p><br>
  </div>
