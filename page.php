<?php get_header(); ?>
    <div id="contents">
    <div class="">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
        <div id="conL">
            <h2><?php the_title(); ?></h2>
<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content(); ?>

<?php endwhile; endif; ?>


<?php if (is_page(array('13'))) {?>

<?php } elseif(in_category(array('2'))){ ?>

<?php }else{ ?>
<a href="<?php echo home_url('/contact'); ?>"><button class="btn1">お問い合わせ</button></a>
<?php } ?>
</div><!-- /#conL -->
        
<?php get_sidebar(); ?>

    </div>
    <?php get_footer(); ?>