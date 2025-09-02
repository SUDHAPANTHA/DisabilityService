<?php
function disabilityservices_enqueue_styles() {
    // Tailwind CDN (for quick setup) — use compiled CSS for production
    wp_enqueue_style('tailwindcss', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');

    // Your custom CSS (optional)
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'disabilityservices_enqueue_styles');
function disabilityservices_setup() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'disabilityservices')
    ]);
}
add_action('after_setup_theme', 'disabilityservices_setup');
// Handle contact form submission
function handle_contact_form() {
    // Security check
    if (!isset($_POST['contact_form_nonce_field']) || !wp_verify_nonce($_POST['contact_form_nonce_field'], 'contact_form_nonce')) {
        wp_die('Security check failed!');
    }

    // Sanitize input
    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name  = sanitize_text_field($_POST['last_name']);
    $email      = sanitize_email($_POST['email']);
    $phone      = sanitize_text_field($_POST['phone']);
    $message    = sanitize_textarea_field($_POST['message']);

    // Optional: Require user login
    // if (!is_user_logged_in()) {
    //     wp_die('You must be logged in to submit this form.');
    // }

    // Save to DB
    global $wpdb;
    $table = $wpdb->prefix . 'contact_messages';
    $wpdb->insert(
        $table,
        [
            'first_name' => $first_name,
            'last_name'  => $last_name,
            'email'      => $email,
            'phone'      => $phone,
            'message'    => $message,
            'created_at' => current_time('mysql')
        ]
    );

    // Send email to admin
    wp_mail(get_option('admin_email'), 'New Contact Message', "Name: $first_name $last_name\nEmail: $email\nPhone: $phone\nMessage:\n$message");

    // Redirect back with success
    wp_redirect(home_url('/contact-us?success=1'));
    exit;
}
add_action('admin_post_nopriv_contact_form_submit', 'handle_contact_form');
add_action('admin_post_contact_form_submit', 'handle_contact_form');

// Create DB table on theme activation
function create_contact_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_messages';
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        first_name varchar(100) NOT NULL,
        last_name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(50),
        message text NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_switch_theme', 'create_contact_table');
// Add Contact Messages Menu in WP Admin
function contact_messages_menu() {
    add_menu_page(
        'Contact Messages',        // Page title
        'Contact Messages',        // Menu title
        'manage_options',          // Capability
        'contact-messages',        // Menu slug
        'contact_messages_page',   // Callback function
        'dashicons-email-alt',     // Icon
        25                         // Position
    );
}
add_action('admin_menu', 'contact_messages_menu');
// Display the messages
function contact_messages_page() {
    global $wpdb;
    $table = $wpdb->prefix . 'contact_messages';
    $messages = $wpdb->get_results("SELECT * FROM $table ORDER BY created_at DESC");
    ?>
    <div class="wrap">
        <h1 style="margin-bottom:20px;">Contact Messages</h1>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($messages) {
                    foreach($messages as $msg) {
                        echo '<tr>';
                        echo '<td>'.esc_html($msg->id).'</td>';
                        echo '<td>'.esc_html($msg->first_name).'</td>';
                        echo '<td>'.esc_html($msg->last_name).'</td>';
                        echo '<td>'.esc_html($msg->email).'</td>';
                        echo '<td>'.esc_html($msg->phone).'</td>';
                        echo '<td>'.esc_html($msg->message).'</td>';
                        echo '<td>'.esc_html($msg->created_at).'</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="7" style="text-align:center;">No messages found.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
}
?>