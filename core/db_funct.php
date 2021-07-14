<?php
function loggedID() {
	return isLoggedIn() ? $_SESSION['username'] : FALSE;
}
function userExists($username) {
	global $dblink;

	$sql = "SELECT * FROM users WHERE username = '$username'";

	$result = mysqli_query($dblink, $sql);

	return (mysqli_num_rows($result)) ? TRUE : FALSE;
}

function getUser($username) {
	global $dblink;

	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_assoc($result) : FALSE;
}

function getPhdStudents() {
	global $dblink;
	$sql = "SELECT * FROM phdstudent";
	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : FALSE;
}
function getfacility() {
	global $dblink;
	$sql = "SELECT * FROM facilities";
	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : FALSE;
}

function getmscStudents() {
	global $dblink;
	$sql = "SELECT * FROM Mphillmember";
	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : FALSE;
}

function getproject() {
	global $dblink;
	$sql = "SELECT * FROM project";
	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : FALSE;
}

function getProjectBySerial($serial) {
	global $dblink;

	$sql = "SELECT * FROM project WHERE Serial = '$serial'";

	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_assoc($result) : FALSE;
}

function getpresentation1() {
	global $dblink;
	$sql = "SELECT * FROM presentation";
	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : FALSE;
}
function getpresentation2() {
	global $dblink;
	$sql = "SELECT * FROM presentation2";
	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : FALSE;
}

function getpresentation3() {
	global $dblink;
	$sql = "SELECT * FROM presentation3";
	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : FALSE;
}

function getpublication2() {
	global $dblink;
	$sql = "SELECT * FROM publication2";
	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : FALSE;
}

function getpublication($time) {
	global $dblink;
	$sql = "SELECT * FROM publication WHERE time = '$time'";
	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_assoc($result) : FALSE;
}
function getpublicationnew($time) {
	global $dblink;
	$sql = "SELECT * FROM publication2 WHERE time = '$time'";
	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_assoc($result) : FALSE;
}


function passwordMatch($username, $password) {
	$user = getUser($username);

	return $password == $user['password'];
}

function changePassword($username, $password) {
	global $dblink;

	$sql = "UPDATE users SET password = '$password' WHERE username = '$username'";
	$result = mysqli_query($dblink, $sql);

	return $result ? TRUE : FALSE;
}
function getmscStudentBySerial($serial) {
	global $dblink;

	$sql = "SELECT * FROM Mphillmember WHERE Serial = '$serial'";

	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_assoc($result) : FALSE;
}

function getDocStudentBySerial($serial) {
	global $dblink;

	$sql = "SELECT * FROM phdstudent WHERE Serial = '$serial'";

	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_assoc($result) : FALSE;
}
function getPresetationInviteBySerial($serial) {
	global $dblink;

	$sql = "SELECT * FROM presentation WHERE Serial = '$serial'";

	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_assoc($result) : FALSE;
}
function getPresetationBySerial($serial) {
	global $dblink;

	$sql = "SELECT * FROM presentation2 WHERE Serial = '$serial'";

	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_assoc($result) : FALSE;
}
function getPresetationResearchBySerial($serial) {
	global $dblink;

	$sql = "SELECT * FROM presentation3 WHERE Serial = '$serial'";

	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_assoc($result) : FALSE;
}
function getFacilityBySerial($serial) {
	global $dblink;

	$sql = "SELECT * FROM facilities WHERE Serial = '$serial'";

	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_assoc($result) : FALSE;
}
function getcontact() {
	global $dblink;
	$sql = "SELECT * FROM users";
	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : FALSE;
}
function getnotice() {
	global $dblink;
	$sql = "SELECT * FROM notice";
	$result = mysqli_query($dblink, $sql);

	return $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : FALSE;
}
