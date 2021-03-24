<?php  include "connection.php"   ?>


<?php   

if(isset($_POST['login']))
{
 
   $query = "SELECT * FROM passkeys WHERE users = '{$_POST['user']}' and passkey = '{$_POST['pass']}' ";

   $select_user_query = mysqli_query($con, $query);
}

while($row = mysqli_fetch_array($select_user_query))
{
    $db_user = $row['users'];
    $db_pass = $row['passkey'];
}



if($_POST['user']!== $db_user && $_POST['pass'] !== $db_pass)
{
    header("Location: ../sqltest/fail.php");

}
else if($_POST['user'] == $db_user && $_POST['pass'] == $db_pass)
{
    header("Location:../sqltest/success.php");
}

?>
