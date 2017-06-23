<?php defined('BASEPATH') OR exit('No direct script access allowed');


//validate session active in codeigniter
function validate_session()
{
	$ci =& get_instance();
    if(!$user = $ci->session->id){
    	$alert = '';
    	$ci->session->set_flashdata('alert', $alert);
        redirect(base_url());
    }
}


//print_r and die, for depurate php code
function dd($var)
{
	print_r('<pre>' . $var . '</pre>');
	die();
}