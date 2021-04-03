<?php
session_start();
?>
<body>
 <form method ="POST">
<h1>Welcome</h1>
<input type="radio" name="availability" value="Online" >  Online
<input type="radio" name="availability" value="Offline" > Offline
<input type="radio" name="availability" value="On Delivery" > On Delivery

<br><br>
 <input  type="submit" name="back" value="Log Out">
 <input  type="submit" name="profile" value="Profile">
 <input  type="submit" name="orderlist" value="Order List">
 <input  type="submit" name="salary" value="Salary Statment">
 </form>
</body>
 <?php
 if(isset($_POST["back"]))
{
    echo "<script>location.href='login.php'</script>";
}
if(isset($_POST["profile"]))
{
    echo "<script>location.href='profile.php'</script>";
}
if(isset($_POST["orderlist"]))
{
    echo "<script>location.href='orderlist.php'</script>";
}
if(isset($_POST["salary"]))
{
    echo "<script>location.href='Salary.php'</script>";
}
?>



