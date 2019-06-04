<?php
if( isset($_POST["submit"]) ) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
	// cek username
	if( mysqli_num_rows($result) === 1 ) {
		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			$_SESSION["login"] = true;
			$_SESSION["nameUser"] = $username;
            header("Location: admin");
			exit;
		}
	} else {
        header("Location: hash.php");
    }
}

?>