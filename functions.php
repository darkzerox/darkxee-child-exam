<?php 
	include_once 'themescript.php';
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
	function my_theme_enqueue_styles() { 
			wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css'); 
			//wp_enqueue_style ('child-style', get_stylesheet_directory_uri (). '/asset/style/exam-style.css' );

			wp_enqueue_script('script-custom',get_stylesheet_directory_uri().'/asset/js/script.js',  array( 'jquery' ));

			//wp_enqueue_script('script-exam',get_stylesheet_directory_uri().'/asset/js/exam-script.js',  array( 'jquery' ));

	} 
		

	//hook examinee-name

	//add_action ('examinee-name','myname');
	// function myname(){
	// 	echo 'Examinee By Mr. Light';
	// }
