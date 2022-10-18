<?php 


function emptyInputLogin($u_user,$u_pass){

	$result; 

	if(empty($u_user)|| empty($u_pass)){

		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
	
}

