<?php
function elh_insert_into_db() {

    global $wpdb;
    // creates my_table in database if not exists
    $table = $wpdb->prefix . "pitchproject"; 
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $pitchproject (
        `id` mediumint(9) NOT NULL AUTO_INCREMENT,
        `fullname` varchar(255) NOT NULL,
        `company_name` varchar(100) NOT NULL,
        `email` varchar(1024) NOT NULL,
        `phone` int(15) NOT NULL,
        `desc` text NOT NULL,
    UNIQUE (`id`)
    ) $charset_collate;";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
    // starts output buffering
    ob_start();
    ?>

    <?php
    // does the inserting, in case the form is filled and submitted
    if($_POST["submitbtn"] != '' && $_POST["fullname"] != '' && $_POST["cname"] != '' && $_POST["email"] != '' && $_POST["phone"] != '' && $_POST["desc"] != '') {
        $table = $wpdb->prefix."pitchproject";
        $name = strip_tags($_POST["fullname"], "");
        $cname = strip_tags($_POST["cname"], "");
        $email = strip_tags($_POST["email"], "");
        $phone = strip_tags($_POST["phone"], "");
        $desc = strip_tags($_POST["desc"], "");
        $wpdb->insert( 
            $table, 
            array( 
                'fullname' => $name,
                'company_name' => $cname,
                'email' => $email,
                'phone' => $phone,
                'desc' => $desc
            )
        );
    }
    // echoes a success message to the visitor
    if($_POST["submitbtn"] != '' && $_POST["fullname"] != '' && $_POST["cname"] != '' && $_POST["email"] != '' && $_POST["phone"] != '' && $_POST["desc"] != '') {
        echo "<p> Your pitch was successfully inserted into our database. Thanks!!</p>";
    }
    // outputs everything
    return ob_get_clean();

}
// adds a shortcode you can use: [insert-into-db]
add_shortcode('insert-into-db', 'elh_insert_into_db');