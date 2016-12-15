<?php
add_action('codepamoja_form_mngmnt','codepamoja_admin_action');
register_activation_hook(__FILE__,'create_table');

function codepamoja_admin_action(){
	add_options_page("Codepamoja_form","Codepamoja",1,"Codepamoja_form","codepamoja_dbManager");

}


function create_table($codepamoja_tablename = ''){
	global $wpdb;
	$table_collation = $wpdb->get_charset_collate();
	$codepamoja_tablename = $wpdb->prefix . "codepamoja_pitch_project"; 

 //create table statement
		$sql = "CREATE TABLE IF NOT EXISTS $codepamoja_tablename (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`name` varchar(100) NOT NULL,
				`company_name` text NOT NULL,
				`email` varchar(100) NOT NULL,
				`phone` int(15) NOT NULL,
				`project_description` text(200) NOT NULL,
				PRIMARY KEY (`id`)
				) $table_collation;";

				require_once( ABSPATH . 'wp-admin/includes/upgrade.php');
				dbDelta($sql);
}

function codepamoja_dbManager(){
}

// displays form
function render_form($func = null){
	if($func !== null){
		if(is_string($func)){
			echo $func;
		} else {
			return is_callable($func) ? call_user_func($func) : null;
		}
	}

}

// inserts data
function save_form_data(){

	//from validation and data insertion
	global $wpdb;
	$text = '';
	$codepamoja_tablename = $wpdb->prefix . "codepamoja_pitch_project";

	if($_POST["submitbtn"] != '' && $_POST["fullname"] != '' && $_POST["cname"] != '' && $_POST["email"] != '' && $_POST["phone"] != '' && $_POST["desc"] != '') 
	{
      
      $name = $_POST["fullname"];
      $cname = $_POST["cname"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $desc = $_POST["desc"];

      $wpdb->query( "INSERT INTO " . $codepamoja_tablename . "
      	(id, name, company_name, email, phone, project_description)
      	VALUES
      	(NULL, '$name' , '$cname', '$email', '$phone', '$desc') ");
      return true;
  }else{
  		return false;
  }

return $text;
}
?>

<?php

	// handle submitt
	if (isset($_POST['submitbtn']){
		$status = save_form_data();

		if($status){
			return json_encode([
				'success' => true,
				'data' => "<p> Your pitch was successfully inserted into our database. Thankyou</p>",
			]);
		}
		return json_encode([
			'success' => false,
			'data' => "<p> Please enter all your details</p>",
		]);
		
	}
?>