<?php  include "connection.php"   ?>


<?php   

if(isset($_POST['login']))
{
   $username = $_POST['user'];
   $password = $_POST['pass'];

   $query = "SELECT * FROM passkeys WHERE users = '{$username}' and passkey = '{$password}' ";

   $select_user_query = mysqli_query($con, $query);
}

while($row = mysqli_fetch_array($select_user_query))
{
    $db_user = $row['users'];
    $db_pass = $row['passkey'];
}



if($username !== $db_user && $password !== $db_pass)
{
    header("Location: ../sqltest/fail.php");

}
else if($username == $db_user && $password == $db_pass)
{
    header("Location:../sqltest/success.php");
}

?>