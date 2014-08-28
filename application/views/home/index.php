  <div class="container">
    <div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
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
        /*
        $img_src = $article->photo;
        $imgbinary = fread(fopen($img_src, "r"), filesize($img_src));
        $img_str = base64_encode($imgbinary);
        echo '<img src="data:image/jpeg;base64,'.$img_str.'" />';
        */

        /*
        $data = $article->photo;
        $data = base64_decode($data);
        $im = imagecreatefromstring($data);
        header('Content-Type: image/jpg');
        echo imagejpeg($im);
        */
        $data = $article->photo;
        echo base64_decode($data); 



       /*
        header("Content-type: image/jpeg");
        $data = $article->photo;
        $data = pack('H*',$data); 
        $im = imagecreatefromstring($data);
        echo imagejpeg($im);
        */
       
        //echo $article->photo 
       ?>"/>
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
