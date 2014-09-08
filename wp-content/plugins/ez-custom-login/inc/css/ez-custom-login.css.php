<?php	

	error_reporting(0);
	
		header("Content-type: text/css; charset: UTF-8");
		/** 
		 * Find wp-load.php
		 * defualt location from this directory is 
		 * "../../../../../wp-load.php"
		 *
		if ( file_exists( '../../../../../wp-load.php' ) ) {
		 */
			require_once( '../../../../../wp-load.php' );
		 /*
		}
		 */

		$data = get_option('ez_login_options');
?>

/* Start Custom CSS input */
<?php echo wp_specialchars_decode( stripslashes( ez_custom_login_get_setting( 'custom_css' ) ), 1, 0, 1 ) . "\n\n"; ?>

/* Main Styling */
html, body.login  {
	<?php if($data['bg_image'] ) { ?>
	background: url('<?php echo $data['bg_image']["src"]; ?>') !important;
	<?php } else { ?>
	background: <?php echo $data['bg_color']; ?> !important;
	<?php } ?>
	<?php if ( $data['stretch'] != false ) { ?>	
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.<?php echo $data['bg_image']["src"]; ?>', sizingMethod='scale') !important;
	-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $data['bg_image']["src"]; ?>', sizingMethod='scale')" !important;
	<?php } ?>
}

/* The Logo */
<?php if ( $data['logo_image']["src"] == '' ) { ?>
#login h1 {
	display: none;
}
<?php } if($data['logo_image'] ) { ?>
.login h1 a {
	background: url( '<?php echo $data['logo_image']["src"]; ?>' ) no-repeat scroll center top transparent;
}
<?php } ?>

/* The Form */
#login form {
	<?php if($data['form_bg_color'] ) { ?>
    background: <?php echo $data['form_bg_color']; ?> !important;
	<?php } else { ?>
    background: transparent !important;
	<?php } ?>
    -moz-border-radius: <?php echo $data['form_border_radius']; ?>px;
    -khtml-border-radius: <?php echo $data['form_border_radius']; ?>px;
    -webkit-border-radius: <?php echo $data['form_border_radius']; ?>px;
    border-radius: <?php echo $data['form_border_radius']; ?>px;
    border: <?php echo $data['form_border_thickness']; ?>px solid <?php echo $data['form_border_color']; ?>;
-moz-box-shadow: rgba(200,200,200,0.0) 0 4px 10px -1px;
-webkit-box-shadow: rgba(200, 200, 200, 0.0) 0 4px 10px -1px;
box-shadow: rgba(200, 200, 200, 0.0) 0 4px 10px -1px;
}

.login form {
-moz-box-shadow: rgba(200,200,200,0.0) 0 4px 10px -1px;
-webkit-box-shadow: rgba(200, 200, 200, 0.0) 0 4px 10px -1px;
box-shadow: rgba(200, 200, 200, 0.0) 0 4px 10px -1px;
}

label {
	color: <?php echo $data['form_label_color']; ?> !important;
}

/* Inputs */
.login input {
	background: <?php echo $data['input_bg_color']; ?> !important;
	border: 1px solid <?php echo $data['input_border_color']; ?> !important;
	color: <?php echo $data['input_text_color']; ?> !important;
}

.login input:hover, .login input:focus {
	border: 1px solid <?php echo $data['input_border_color_h']; ?> !important;
	    -webkit-transition: all 0.15s ease-in-out;
    -moz-transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    -ms-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
}

.login input#wp-submit {
	background: <?php echo $data['submit_bg_color']; ?> !important;
	border: none !important;
    -moz-border-radius: <?php echo $data['submit_radius']; ?>px !important;
    -khtml-border-radius: <?php echo $data['submit_radius']; ?>px !important;
    -webkit-border-radius: <?php echo $data['submit_radius']; ?>px !important;
    border-radius: <?php echo $data['submit_radius']; ?>px !important;
    color: <?php echo $data['submit_text_color']; ?> !important;
}

.login input#wp-submit:hover {
	background: <?php echo $data['submit_bg_color_h']; ?> !important;
    color: <?php echo $data['submit_text_color_h']; ?> !important;
        -webkit-transition: all 0.15s ease-in-out;
    -moz-transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    -ms-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
}

/* Nav */
.login #nav, .login #backtoblog {
	text-shadow: none !important;
    text-align: center !important;
	<?php if($data['hide_nav'] ) { ?>
    display: none !important;
	<?php } ?>
}

.login #nav a, .login #backtoblog a {
    color: <?php echo $data['nav_links_color']; ?> !important;	
    text-decoration: none !important;
}

.login #nav a:hover, .login #backtoblog a:hover {
    color: <?php echo $data['nav_links_color_h']; ?> !important;
        -webkit-transition: all 0.15s ease-in-out;
    -moz-transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    -ms-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;	
}