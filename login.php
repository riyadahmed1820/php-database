<!DOCTYPE html>
<html lang="en">
<head> 
    <title>login</title>
</head>

<?php 
	$username=$_POST['uname'];
	$password=$_POST['password'];

	$host = "localhost";
	$user = "root";
	$pass = "123";
	$db = "demo";

	$conn1 = new mysqli($host, $user, $pass, $db);
	if($conn1->connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn1->connect_error;
	}
	else {
		$sql = "SELECT uname,pass FROM user";
		$result = $conn1->query($sql);
	if ($result->num_rows > 0) {
 
 	 while($row = $result->fetch_assoc()) {
    //echo "User name: " . $row["uname"]. " - Password: " . $row["pass"].  "<br>";
 	 
	if($row['uname']==$username && $row['pass']== $password)
	{
		echo "<script>location.href='index.php'</script>";
	}
		else
		{
			echo "fail";
		}

}
	} else {
  	echo "0 results";
	}
		
	}

	$conn1->close();


	?>
<body >
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <h1 style="text-align: center;">Login</h1>
        <fieldset>

                <tr>
                    <td>
                        UserName 
                    </td>
                    <td>
                        <input type="text" name="uname" value="">
                    </td>
                    </tr>
<br>
                    <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" name="password" value="">
                    </td>
                    </tr>

<br>
            </table>
        </fieldset>
                <br>
                <tr >
                <td>
                    <input type="submit" name="set" value="Login">
					<br>
					 <input type="submit" name="signup" value="Signup">               
    </form> 
	<?php
 	if(isset($_POST["signup"]))//singupbutton
        {   
             
            echo "<script>location.href='reg.php'</script>";
        }

?>
</body>
</html>