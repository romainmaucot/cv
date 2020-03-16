<?php
 //Mobile version
	$iphone     = strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone');
	$ipad       = strpos($_SERVER['HTTP_USER_AGENT'], 'iPad');
	$android    = strpos($_SERVER['HTTP_USER_AGENT'], 'Android');
	$blackberry = strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry');
	if($iphone || $ipad || $android || $blackberry > -1){
        header('Location: ./mobile/');  //dev
//        header('Location: /mobile/');                   //prod
	}
?>