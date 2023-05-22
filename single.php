<?php
get_header()
?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>

        <div style="display:flex; flex-direction: column; align-items: center; height: 80%">
            <h1 style="color:white"><?php the_title() ?></h1>
            <p><?php the_content() ?></p>
        </div>
<?php
    }
}
?>

<?php
get_footer()
?>