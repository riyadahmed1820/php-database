<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Registration</title>
</head>


<?php 

	$host = "localhost";
	$user = "root";
	$pass = "123";
	$db = "demo";

	// Mysqli object-oriented
	$conn1 = new mysqli($host, $user, $pass, $db);

	if($conn1->connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn1->connect_error;
	}
	else {
		echo "Database Connection Successful!";
		$stmt1 = $conn1->prepare("insert into user (uname, pass, fname, lname, gender, mobile, email, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt1->bind_param("ssssssss", $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8);
		$p1 = $_POST['uname'];
		$p2 = $_POST['pass'];
        $p3 = $_POST['fname'];
        $p4 = $_POST['lname'];
		$p5 = $_POST['gender'];
        $p6 = $_POST['mobile'];
        $p7 = $_POST['email'];
        $p8 = $_POST['address'];
		$status = $stmt1->execute();

		if($status) {
			echo "Data Insertion Successful.";
		}
		else {
			echo "Failed to Insert Data.";
			echo "<br>";
			echo $conn1->error;
		}


	}
    

	$conn1->close();
    ?>
<body >
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <h1 style="text-align: center;">Registertion-form</h1>
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
                        <input type="password" name="pass" value="">
                    </td>
                    </tr>

<br>
                    <tr>
                    <td>
                        First Name
                    </td>
                    <td>
                        <input type="text" name="fname" value="">
                    </td>
                    </tr>
<br>
                    <td>
                        Last Name
                    </td>
                    <td>
                        <input type="text" name="lname" value="" >
                    </td>
                </tr>
<br>
                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        <input type="radio" name="gender" value="Male" >  Male 
                        <input type="radio" name="gender" value="Female" > Female
                    </td>
                </tr>
<br>
                <tr>
                    <td>
                        Mobile Number
                    </td>
                    <td>
                        <input type="number" name="mobile" value="">
                    </td>
                    </tr>
<br>
                    <td>
                        Email Addresss
                    </td>
                    <td>
                        <input type="email" name="email" value="" >
                    </td>
                </tr>
<br>
                <td>
                         Addresss
                    </td>
                    <td>
                        <input type="text" name="address" value="" >
                    </td>
                </tr>

         
            </table>
        </fieldset>
                <br>
                <tr >
                <td>
                    <input type="submit" name="set" value="Submit"> 
                  
    </form>  


</body>
</html>