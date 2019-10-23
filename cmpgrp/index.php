<?php 
/* Template Name: grpCAMP*/
 ?>
<?php get_header(); ?>

<div>
<div id="header">
</div>

<div id="top">
  <h1><?php the_field('header1');?></h1>

<br><br>

<img src="<?php the_field('picture1');?>">

<br><br>

<p>
 <?php the_field('text1');?>
</p>
</div>


<div id="vrfr">
  <h1><?php the_field('headline2');?></h1>

<br><br>

<div id="ring">
<div class="rings"><div class="rinrin"><p><?php the_field('cta-1');?></p></div></div>
<div class="rings"><div class="rinrin"><p><?php the_field('cta-2');?></p></div></div>
<div class="rings"><div class="rinrin"><p><?php the_field('cta-3');?></p></div></div>
</div>
</div>



<div id="news">
  <h1><?php the_field('header-3');?></h1>


<br><br>
<div id="thaform">
<form>
  <input type="text" value="namn"><br><br>
  <input type="email"value="epost"><br><br>
  <button type="submit" value="go!">go!</button>
</form>
</div>
</div>

<?php get_footer(); ?>
