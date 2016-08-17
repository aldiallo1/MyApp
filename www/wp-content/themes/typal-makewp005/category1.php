<?php /*
    Template Name: category1
*/ ?>
<?php get_header(); ?>
<?php
    if (is_home()) {
    query_posts("cat=-1");
    }
?>

<?php
    $events_cat = '1'; 

    if (!is_paged()) {
        query_posts('cat=' . $events_cat);
    } else {
        query_posts('cat=' . $events_cat . '&paged=' . $paged);
    }
?>
        <?php include (TEMPLATEPATH . '/theloop.php'); ?> 

    </div> 

    <?php get_sidebar(); ?> 

</div> 

<?php get_footer(); ?>