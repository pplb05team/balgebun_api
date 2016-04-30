<?php

require_once 'get_data.php';
$response = array("error" => FALSE);
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['countername'])) {

    // receiving the post params
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = 2;
	$countername = $_POST['countername'];

    // check if user is already existed with the same email
    if (isUserExisted($username)) {
        // user already existed
        $response["error"] = TRUE;
        $response["error_msg"] = "User already existed with " . $username;
        echo json_encode($response);
		
    } else {
        // create a new user
        $res = storeUser($username, $email, $password, $role);
		
        if ($res != false) {
			// user is found, store counter
			$res2 = storeCounter($username, $countername);
			if($res2 != false) {
				$response["user"]["username"]=$res["username"];
				$response["user"]["email"]=$res["email"];
				$response["user"]["countername"]=$countername;
				echo json_encode($response);
			} else {
				 // counter failed to store
				$response["error"] = TRUE;
				$response["error_msg"] = "Unknown error occurred in registration!";
				echo json_encode($response);
			}
        } else {
            // user failed to store
            $response["error"] = TRUE;
            $response["error_msg"] = "Unknown error occurred in registration!";
            echo json_encode($response);
        }
    }
} else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters (name, email, password, or counter name) is missing!";
    echo json_encode($response);
}
?>