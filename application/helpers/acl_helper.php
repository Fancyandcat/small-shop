<?php
use \LeanCloud\User;

function acl () {
	if (User::getCurrentUser() != null && User::getCurrentUser()->get('username') == 'fancyandcat') {
		return true;
	}
	return false;
}