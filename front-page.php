<?php get_header();
  $title = get_field('page_title');
  $description = get_field('description');
  $otherdescription = get_field('other_description');
  $my_input = get_field('my_input');
?>
<section class="page">
    <div class="container">

               <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>

                <?php if($title) :?>
                  <h1><?php echo $title;?></h1>
                <?php endif;?>
                <?php if($description) :?>
                   <?php echo nl2br($description);?>
                <?php endif;?>
                <?php if($otherdescription) :?>
                   <?php echo ($otherdescription);?>
                <?php endif;?>
                <?php if($my_input) :?>
                 <?php echo $my_input;?>
                <?php endif;?>

    </div>
</section>

<?php get_footer();?>