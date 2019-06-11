<?php

function is_logged_in()
{
	$ci = get_instance();
	if (!$ci->session->userdata('email') && !$ci->session->userdata('nama_user')) {
			
		redirect('auth');
	}
	
}

?>