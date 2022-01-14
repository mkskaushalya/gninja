<?php 
include "connect.php";

if(isset($_POST["signup"])){
    
    $firstname	= $_POST["firstname"];
	$lastname	= $_POST["lastname"];
	$birthday 	= $_POST["birthday"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $query);
	if($result)	{
		if($result && mysqli_num_rows($result) > 0)	{
            echo "This username already taken";
        }else{
            $sqlq = "INSERT INTO users(firstname, lastname, birthday,username, password) VALUES('$firstname', '$lastname', '$birthday', '$username', '$password')";
					if ($conn->query($sqlq) === TRUE) {//record added
		  			echo "New user record created successfully<br>";
		  				$q = "SELECT * FROM users WHERE username='$username' LIMIT 1";
						$result = mysqli_query($conn, $q);
						if($result)	{
							if($result && mysqli_num_rows($result) > 0)	{
								$user_data = mysqli_fetch_assoc($result);
								session_start();
				                $_SESSION['user_id'] = $user_data['id'];
                                header("Location:../index.php?pr=sign-up-sucsess");

                            }}
                        }

        }
    die();
        }

        else{
                echo "invalid username or password";
            }
}
else{
    echo "invalid username or password";
    //header("Location:../index.php?error=login");
}
?>