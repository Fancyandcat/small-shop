<?php
require_once("vendor/qiniu/php-sdk/autoload.php");

use Qiniu\Auth;

class Upload {
	function avatar() {
        $accessKey = 'sO48RbRFx4lXWZ7zYj7A7VwMWehqsp1IceEtllZe';
        $secretKey = 'BixrNKnLqlwVeOPG3Iuj1DLvs1-awqUwU1movSgs';
        $auth = new Auth($accessKey, $secretKey);
        $bucket = 'small-store';
        $token = $auth->uploadToken($bucket);
        echo $token;
	}
}
?>