<?php
/*TRIO meta boxes*/

/* Personnel can have professional titles  */

//add meta box to screen
function personnel_title_meta_box() {

    $screens = array( 'staff', 'board' ); //staff and board post types

    foreach ( $screens as $screen ) {
        add_meta_box(
            'personnel-title',
            __( 'Personnel Title', 'trio-v1' ),
            'personnel_title_meta_box_callback',
            $screen
        );
    }
}

add_action( 'add_meta_boxes', 'personnel_title_meta_box' );

//create input
function personnel_title_meta_box_callback($post)
{

	$value = get_post_meta($post->ID, '_trio_title_meta_key', true);
    ?>
   		<input type="text" placeholder="Enter this person's title" name="personnel_title" class="widefat" value="<?php echo $value; ?>" />
    <?php
}

//save input data on save post
function personnel_title_save_data($post_id)
{
    if (array_key_exists('personnel_title', $_POST)) {
    	$personnel_title = sanitize_text_field($_POST['personnel_title']);
        update_post_meta(
            $post_id,
            '_trio_title_meta_key',
            $personnel_title
        );
    }
}
add_action('save_post', 'personnel_title_save_data');