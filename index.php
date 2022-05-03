<?php 
// Silence is golden. And we know it very well! :)


/** TODO: */

// 1 ***** Add Redux 


// 2 ***** Axois move to service  ===DONE


// 3 ***** Add autoload


// 4 ***** Add options for meta box
    /*
    add_action('add_meta_boxes', 'add_product_meta');
    function add_product_meta()
    {
        global $post;

        if(!empty($post))
        {
            $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

            if($pageTemplate == 'page-templates/product-page.php' )
            {
                add_meta_box(
                    'product_meta', // $id
                    'Product Information', // $title
                    'display_product_information', // $callback
                    'page', // $page
                    'normal', // $context
                    'high'); // $priority
            }
        }
    }

    function display_product_information()
    {
        // Add the HTML for the post meta
    }




    I'm trying to use something like:

function save_meta_page( $post_id ) {
$pageTemplate = get_post_meta($post_id, '_wp_page_template', true);

                if($pageTemplate == 'templates/mytemplate.php' ){
    if( isset($_POST['my_meta_value']) ) {
	update_post_meta( $post_id, 'my_meta_value', sanitize_text_field( $_POST['my_meta_value'] ) );
 }
 }
}
add_action('save_post', 'save_meta_page', 9999, 1);


    */