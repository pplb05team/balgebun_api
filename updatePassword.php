<?php
require_once 'get_data.php';
$response = array("error" => FALSE);

if (isset($_POST['username']) && isset($_POST['password'])) {
	// receiving the post params
    $username = $_POST['username'];
    $password = $_POST['password'];
	// update user password
	$res = updatePass($username, $password);
	if($res){
		echo json_encode($response);
	} else {
        // user is not found with the credentials
        $error["error"] = TRUE;
		$error["error_msg"] = "Error updating password. Please try again!";
        echo json_encode($error);
    }
} else {
    // required post params is missing
    $error["error"] = TRUE;
    $error["error_msg"] = "Required parameters username or password is missing!";
    echo json_encode($error);
}
?>