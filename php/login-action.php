<?php 
include "connect.php";

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $query);
	if($result)	{
		if($result && mysqli_num_rows($result) > 0)	{
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password){
				session_start();
				$_SESSION['user_id'] = $user_data['id'];
                header("Location:../index.php?pr=login-sucsess");
            }else{
                echo "no username or password";
            }
        }else{
            echo "not match username or password";
        }
}else{
                echo "invalid username or password";
            }
}else{
    header("Location:../index.php?error=login");
}
?>