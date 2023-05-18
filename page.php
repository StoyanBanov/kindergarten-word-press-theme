<?php
get_header()
?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <div style="display:flex; flex-direction: column; align-items: center; width: 100%;">
            <h1><?php the_title() ?></h1>
            <p><?php the_content() ?></p>
        </div>
<?php
    }
}
?>

<?php
get_footer()
?>