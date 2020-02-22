<?php get_header(); get_footer(); ?>

<?php JC_Sandbox::run(); ?>

<?php 
acf_form(array(
	'post_id'		=> 39, // 'new_post',
	'post_title'	=> false,
	'post_content'	=> false,
	'form' => true,
	'html_submit_button'  => '<div class="acf-fields"><div class="acf-field"><input type="submit" class="acf-button button button-primary button-large btn btn-primary"" value="%s" /></div></div>',
	'new_post'		=> array(
		'post_type'		=> 'incident',
		'post_status'	=> 'private'
	)
)); 
?>