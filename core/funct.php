<?php

function isLoggedIn() {
	return isset($_SESSION['username']) ? TRUE : FALSE;
}

function isNotLoggedIn() {
	return ! isLoggedIn();
}

function loggedUsername() {
	return isLoggedIn() ? $_SESSION['username'] : FALSE;
}

function logout() {
	if(isLoggedIn()) :
		session_unset();
		session_destroy();
	endif;

	return isNotLoggedIn() ? TRUE : FALSE;
}
