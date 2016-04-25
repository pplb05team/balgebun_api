<?php
require_once 'get_data.php';
$response = array("error" => FALSE);

if (isset($_POST['role'])) {
	// receiving the post params
    $role = $_POST['role'];
	// get users by role
	$res = getUsersByRole($role);
	if(!is_null($res)) {
		foreach($res as &$value) {
			$response[user][]=$value;
		}
		echo json_encode($response);
	} else {
		$error["error"] = TRUE;
		$error["error_msg"] = "Error fetching users.";
		echo json_encode($error);
	}
} else {
    // required post params is missing
    $error["error"] = TRUE;
    $error["error_msg"] = "Required parameter role is missing!";
    echo json_encode($error);
}
?>