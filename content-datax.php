
<?php 
  $loop = CFS()->get('data');
  $aux = 0;

 ?>
<section id="sabias-que">
  <div id="facts" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  <!--   <ol class="carousel-indicators">
      <?php for ($i=0; $i <sizeof($loop); $i++) { ?>
        <li data-target="#facts" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0){ echo "active" ; }?>" ></li>
      <?php } ?>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php foreach ($loop as $afact) { ?>
        <div class="item <?php if ($aux == 0){ echo 'active' ;}?> ">
        <img src="<?php echo $afact['data_img'] ?>" alt="...">
        <div class="carousel-caption center-vert">
          <?php echo $afact['data_text']; ?>
        </div>
      </div>

      <?php
        $aux = 1;
      } ?>
    </div>
  </div>
</section>

<div style="clear:both"></div>