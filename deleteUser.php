<?php
require_once 'get_data.php';
$response = array("error" => FALSE);

if (isset($_POST['username'])){
	// receiving the post params
    $username = $_POST['username'];
	// delete user
	$res = deleteUser($username);
	if($res){
		echo json_encode($response);
	} else {
        // user is not found with the credential
        $error["error"] = TRUE;
		$error["error_msg"] = "Error deleting user or user does not exist.";
        echo json_encode($error);
    }
} else {
    // required post params is missing
    $error["error"] = TRUE;
    $error["error_msg"] = "Required parameter username is missing!";
    echo json_encode($error);
}
?>