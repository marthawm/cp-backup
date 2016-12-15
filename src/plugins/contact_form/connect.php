<?php 
function save_pitch_project()

{

​

    global $wpdb;

    // creates my_table in database if not exists

    $table = $wpdb->prefix . "pitch_project";

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table (

        `id` mediumint(9) NOT NULL AUTO_INCREMENT,

        `full_name` text NOT NULL,

        `company_name` text NOT NULL,

        `email` text NOT NULL,

        `phone` text NOT NULL,

        `project_description` text NOT NULL,

    UNIQUE (`id`)

    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    dbDelta($sql);

    // starts output buffering

    ob_start();

    ?>

    <form id="pitchform" class="pitch-your-project-form" action="#pitchform">

        <div class="input-wrapper">

            <div class="pitch-your-project-name"><!-- give single class -->

                <label class="label">full name</label>

                <input class="pitch-your-project-input name-input" type="text">

            </div>

            <div class="pitch-your-project-company"><!-- give single class -->

                <label class="label">company name</label>

                <input class="pitch-your-project-input company-input" type="text">

            </div>

            <div class="pitch-your-project-email"><!-- give single class -->

                <label class="label">email</label>

                <input class="pitch-your-project-input email-input" type="text">

            </div>

            <div class="pitch-your-project-phone"><!-- give single class -->

                <label class="label">phone</label>

                <input class="pitch-your-project-input phone-input" type="text">

            </div>                    <label class="label">project description</label>

            <textarea class="project-descr" name="desc"></textarea><!-- max-width -->

            <button type="submit" class="btn pitch-your-project-btn">submit project</button>

        </div>

    </form>

    <?php

    $html = ob_get_clean();

    // does the inserting, in case the form is filled and submitted

    if (isset($_POST["submit"]) && $_POST["full_name"] != ""

    && $_POST["company name"] !=""

        && $_POST["email"] !=""

        && $_POST["phone"] !=""

        && $_POST["project description"] !=""

    ) {

        $table = $wpdb->prefix . "pitch_project";

        $full_name= strip_tags($_POST["full_name"],"");

        $company_name= strip_tags($_POST["company name"],"");

        $email= strip_tags($_POST["email"],"");

        $phone= strip_tags($_POST["phone"],"");

        $project_description= strip_tags($_POST["project description"],"");

        $wpdb->insert(

            $table,

            array(

                'full name' => $full_name,

                'company name' => $company_name,

            'email' => $email,

            'phone' => $phone,

            'project description' => $project_description

            )

        );

        $html = "<p>Project for <strong>$full_name</strong> was successfully recorded. Thanks!!</p>";

    }

​

}
?>