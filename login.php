<?php

require("mysqli_connect.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $username = mysqli_real_escape_string($dbc,$_POST['username']);
$password = mysqli_real_escape_string($dbc,$_POST['password']);

$query = "SELECT * FROM users WHERE username = '{$username}'
            AND password = '{$password}'";

$result = mysqli_query($dbc, $query);
mysqli_query($dbc, $query) or die(mysqli_error($dbc) . $query);

// while($row = mysqli_fetch_array($result)){
//     echo " <p> {$row['userid']} &nbsp&nbsp&nbsp {$row['username']} &nbsp&nbsp&nbsp {$row['password']} 
//   </p>";
// }


if(mysqli_num_rows($result) > 0){
    session_start();
    $_SESSION["login"] = true;
    header("Location:account.php");
}
else{
    echo "Invalid Login Info!";
}
mysqli_close($dbc);

}



?>