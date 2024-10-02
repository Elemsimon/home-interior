<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/style-starter.css', false,'4.4.1','all');
   wp_enqueue_style( 'first');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
   wp_register_script('change', get_template_directory_uri() . '/assets/js/theme-change.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'change');
   wp_register_script('popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'popup');
   wp_register_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'carousel');
   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
}
add_action('wp_enqueue_scripts', 'add_script');

// Theme Support
add_theme_support('post-thumbnails');

// Menu
function my_custom_theme_setup() {
   register_nav_menus( array(
       'primary' => __( 'Primary Menu', 'text_domain' ),
       'footer'  => __( 'Footer Menu', 'text_domain' ),
   ) );
}
add_action( 'after_setup_theme', 'my_custom_theme_setup' );

// Add Subscribers Menu in Admin Dashboard
function register_subscriber_menu_page() {
    add_menu_page(
        'Subscribers', // Page title
        'Subscribers', // Menu title
        'manage_options', // Capability
        'subscribers', // Menu slug
        'display_subscriber_list', // Callback function
        'dashicons-email-alt', // Icon
        6 // Position
    );
}
add_action( 'admin_menu', 'register_subscriber_menu_page' );

//Handle Form Submission
function handle_subscription_form() {
    if ( isset( $_POST['subscribe-submitted'] ) ) {
        // Sanitize email
        $email = sanitize_email( $_POST["subscriber_email"] );

        // Check if email is valid
        if ( is_email( $email ) ) {
            // Store email in the database
            global $wpdb;
            $table_name = $wpdb->prefix . 'subscribers';
            
            // If the table doesn't exist, create it
            if( $wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name ) {
                $charset_collate = $wpdb->get_charset_collate();
                $sql = "CREATE TABLE $table_name (
                    id mediumint(9) NOT NULL AUTO_INCREMENT,
                    email varchar(100) NOT NULL,
                    PRIMARY KEY  (id)
                ) $charset_collate;";
                require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                dbDelta( $sql );
            }

            // Insert the email into the subscribers table
            $wpdb->insert( $table_name, array( 'email' => $email ) );

            // Success message
            echo '<p>Thank you for subscribing!</p>';
        } else {
            echo '<p>Please enter a valid email address.</p>';
        }
    }
}
add_action('wp', 'handle_subscription_form');

// Callback function to display the list
function display_subscriber_list() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'subscribers';
    $subscribers = $wpdb->get_results( "SELECT * FROM $table_name" );

    echo '<h1>Subscribers</h1>';
    echo '<table class="widefat fixed" cellspacing="0">
        <thead>
            <tr>
                <th id="columnname" class="manage-column column-columnname" scope="col">Email</th>
            </tr>
        </thead>
        <tbody>';
    
    foreach ( $subscribers as $subscriber ) {
        echo '<tr>';
        echo '<td>' . esc_html( $subscriber->email ) . '</td>';
        echo '</tr>';
    }

    echo '</tbody></table>';
}




// Menu Support alternative
/* add_theme_support('menus'); */

/* register_nav_menus(
    array(
        'primary' => __( 'Primary Menu', 'theme' ),
    )
); */

/* function my_custom_footer_widgets() {
   register_sidebar( array(
       'name'          => __( 'Footer Widget Area 1', 'text_domain' ),
       'id'            => 'footer-1',
       'before_widget' => '<div class="footer-widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h2 class="widget-title">',
       'after_title'   => '</h2>',
   ) );

   register_sidebar( array(
       'name'          => __( 'Footer Widget Area 2', 'text_domain' ),
       'id'            => 'footer-2',
       'before_widget' => '<div class="footer-widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h2 class="widget-title">',
       'after_title'   => '</h2>',
   ) );

   register_sidebar( array(
       'name'          => __( 'Footer Widget Area 3', 'text_domain' ),
       'id'            => 'footer-3',
       'before_widget' => '<div class="footer-widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h2 class="widget-title">',
       'after_title'   => '</h2>',
   ) );
}
add_action( 'widgets_init', 'my_custom_footer_widgets' ); */

/* function mytheme_customize_register( $wp_customize ) {
    // Add a section for the footer
    $wp_customize->add_section( 'footer_section', array(
    'title' => __( 'Footer Content', 'mytheme' ),
    'priority' => 120,
    ) );
   
    // Add a setting for the footer text
    $wp_customize->add_setting( 'footer_text_setting', array(
    'default' => __( 'Default Footer Text', 'mytheme' ),
    'sanitize_callback' => 'sanitize_text_field',
    ) );
   
    // Add a control to edit the footer text
    $wp_customize->add_control( 'footer_text_control', array(
    'label' => __( 'Footer Text', 'mytheme' ),
    'section' => 'footer_section',
    'settings' => 'footer_text_setting',
    'type' => 'text',
    ) );
   }
   add_action( 'customize_register', 'mytheme_customize_register' );
    */

    // Footer content
    function mytheme_customize_register( $wp_customize ) {
        // Add a section for the footer
        $wp_customize->add_section( 'footer_section', array(
            'title'    => __( 'Footer Content', 'mytheme' ),
            'priority' => 120,
        ) );
    
        // Add a setting for the footer text
        $wp_customize->add_setting( 'footer_text_setting', array(
            'default'           => __( 'Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ipnut libero malesuada feugiat. Lorem ipsum dolor sit amet elit.', 'mytheme' ),
            'sanitize_callback' => 'sanitize_text_field',
        ) );
    
        // Add settings for contact information
        $wp_customize->add_setting( 'footer_address_setting', array(
            'default'           => __( '#302, 5th Floor, ALHK-2247 Colendar ek, Settlers Lane, New York.', 'mytheme' ),
            'sanitize_callback' => 'sanitize_text_field',
        ) );
    
        $wp_customize->add_setting( 'footer_phone_setting', array(
            'default'           => __( '+(21)-255-999-8888', 'mytheme' ),
            'sanitize_callback' => 'sanitize_text_field',
        ) );
    
        $wp_customize->add_setting( 'footer_email_setting', array(
            'default'           => __( 'interior@mail.com', 'mytheme' ),
            'sanitize_callback' => 'sanitize_email',
        ) );
    
        // Add settings for Company, Categories, Resources, Account sections
        $wp_customize->add_setting( 'footer_company_links', array(
            'default'           => __( 'About Us,Terms of use,Faq\'s,Privacy Policy,Get In Touch', 'mytheme' ),
            'sanitize_callback' => 'sanitize_text_field',
        ) );
    
        $wp_customize->add_setting( 'footer_categories_links', array(
            'default'           => __( 'Furniture Chairs,Three Seater Sofas,Dining Tables,Office Chairs,Kitchen Cabinets', 'mytheme' ),
            'sanitize_callback' => 'sanitize_text_field',
        ) );
    
        $wp_customize->add_setting( 'footer_resources_links', array(
            'default'           => __( 'Getting Started,Best Collections,All Categories,24/7 Support,Contact for Help', 'mytheme' ),
            'sanitize_callback' => 'sanitize_text_field',
        ) );
    
        $wp_customize->add_setting( 'footer_account_links', array(
            'default'           => __( 'Sign In / Login,Create Account', 'mytheme' ),
            'sanitize_callback' => 'sanitize_text_field',
        ) );

        $wp_customize->add_setting( 'footer_copyright', array(
            'default'           => __( 'Home Interior. All rights reserved.' ),
            'sanitize_callback' => 'sanitize_text_field',
        ) );
    
        // Add control for each section
        $wp_customize->add_control( 'footer_text_control', array(
            'label'    => __( 'Footer Text', 'mytheme' ),
            'section'  => 'footer_section',
            'settings' => 'footer_text_setting',
            'type'     => 'textarea',
        ) );
    
        $wp_customize->add_control( 'footer_address_control', array(
            'label'    => __( 'Address', 'mytheme' ),
            'section'  => 'footer_section',
            'settings' => 'footer_address_setting',
            'type'     => 'text',
        ) );
    
        $wp_customize->add_control( 'footer_phone_control', array(
            'label'    => __( 'Phone Number', 'mytheme' ),
            'section'  => 'footer_section',
            'settings' => 'footer_phone_setting',
            'type'     => 'text',
        ) );
    
        $wp_customize->add_control( 'footer_email_control', array(
            'label'    => __( 'Email Address', 'mytheme' ),
            'section'  => 'footer_section',
            'settings' => 'footer_email_setting',
            'type'     => 'email',
        ) );
    
        $wp_customize->add_control( 'footer_company_control', array(
            'label'    => __( 'Company Links (comma separated)', 'mytheme' ),
            'section'  => 'footer_section',
            'settings' => 'footer_company_links',
            'type'     => 'textarea',
        ) );
    
        $wp_customize->add_control( 'footer_categories_control', array(
            'label'    => __( 'Categories Links (comma separated)', 'mytheme' ),
            'section'  => 'footer_section',
            'settings' => 'footer_categories_links',
            'type'     => 'textarea',
        ) );
    
        $wp_customize->add_control( 'footer_resources_control', array(
            'label'    => __( 'Resources Links (comma separated)', 'mytheme' ),
            'section'  => 'footer_section',
            'settings' => 'footer_resources_links',
            'type'     => 'textarea',
        ) );
    
        $wp_customize->add_control( 'footer_account_control', array(
            'label'    => __( 'Account Links (comma separated)', 'mytheme' ),
            'section'  => 'footer_section',
            'settings' => 'footer_account_links',
            'type'     => 'textarea',
        ) );

        $wp_customize->add_control( 'footer_account_control', array(
            'label'    => __( 'Footer Copyright (comma separated)', 'mytheme' ),
            'section'  => 'footer_section',
            'settings' => 'footer_copyright',
            'type'     => 'textarea',
        ) );
    }
    add_action( 'customize_register', 'mytheme_customize_register' );

    //Header Content
    function mytheme_customize_register_header( $wp_customize ) {
        // Add a section for the header
        $wp_customize->add_section( 'header_section', array(
            'title'    => __( 'Header Content', 'mytheme' ),
            'priority' => 110,
        ) );
    
        // Add settings for phone number
        $wp_customize->add_setting( 'header_phone_setting', array(
            'default'           => __( '+142 5897555', 'mytheme' ),
            'sanitize_callback' => 'sanitize_text_field',
        ) );
    
        // Add settings for office hours
        $wp_customize->add_setting( 'header_office_hours_setting', array(
            'default'           => __( 'Mon - Fri: 10:00 - 18:00', 'mytheme' ),
            'sanitize_callback' => 'sanitize_text_field',
        ) );
    
        // Add settings for email address
        $wp_customize->add_setting( 'header_email_setting', array(
            'default'           => __( 'info@example.com', 'mytheme' ),
            'sanitize_callback' => 'sanitize_email',
        ) );
    
        // Add controls for header settings
        $wp_customize->add_control( 'header_phone_control', array(
            'label'    => __( 'Phone Number', 'mytheme' ),
            'section'  => 'header_section',
            'settings' => 'header_phone_setting',
            'type'     => 'text',
        ) );
    
        $wp_customize->add_control( 'header_office_hours_control', array(
            'label'    => __( 'Office Hours', 'mytheme' ),
            'section'  => 'header_section',
            'settings' => 'header_office_hours_setting',
            'type'     => 'text',
        ) );
    
        $wp_customize->add_control( 'header_email_control', array(
            'label'    => __( 'Email Address', 'mytheme' ),
            'section'  => 'header_section',
            'settings' => 'header_email_setting',
            'type'     => 'email',
        ) );
    }
    add_action( 'customize_register', 'mytheme_customize_register_header' );

    
?>


