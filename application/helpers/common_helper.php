<?php
function message($type, $message){
	if($type != '' && $message != ''){
		$ci = get_instance();
		$ci->session->set_flashdata('alert', [
			'type' => $type,
			'message' => $message
		]);
	}
}

function show_alerts($alert = array()){ 
	$ci = get_instance();

	if($ci->session->flashdata('alert'))
		$alert = $ci->session->flashdata('alert');	
	
	if(!empty($alert)){
		$icon = '';
		switch($alert['type']){
			case 'warning': $icon = 'warning-sign'; break;
			case 'danger': $icon = 'remove-sign'; break;
			case 'success': $icon = 'ok-sign'; break;
			case 'info': $icon = 'info-sign'; break;
		}
        /*
		echo '<script type="text/javascript">LB_Admin.showAlert = {
			type : "' . $alert['type']  . '",
			message : \''. $alert['message'] .'\'
			'.($icon!=''?', icon : \'glyphicon glyphicon-'.$icon.'\'':',icon:""').'
		}</script>';
        */
		echo '<div class="alert alert-'.$alert['type'].'">'.($icon!=''?'<span class="glyphicon glyphicon-'.$icon.'"></span>':'').'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '.$alert['message'].'</div>';
	}
}

function is_nav_active($uri_string = ''){
	if($uri_string == uri_string()){
		return 'active';
	}else{
		return '';
	}
}

function jobOrderStatus($status_str = ''){
	if($status_str = 'pending'){
		return 'alert-warning';
	}else if($status_str = 'in_progress'){
		return 'alert-info';
	}else if($status_str = 'completed'){
		return 'alert-success';
	}else if($status_str = 'canceled'){
		return 'alert-danger';
	}
}

function field_error($field = ''){
	if(form_error($field))
		return ' has-error';
}
