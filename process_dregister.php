<?php
session_start(); 
$x=$_SESSION["username"];
    if (isset($_POST['register']))
    {
        $Dname = $_POST['Dname'];

        $addr = $_POST['addr'];
        $cno = $_POST['cno'];
        
        $username = strip_tags($_POST['username']);

        //check whether there's already a user having the same username
        $db = mysqli_connect('localhost','root','','shop')
                or die('Error connecting to MySQL server.'); 
        $query = "SELECT dealers_id FROM dealers WHERE dealers_Username = '$username' LIMIT 1";
        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) == 0)
        {
            $newuser = "INSERT INTO dealers (dealers_name,dealers_Username, dealers_address,dealers_email,dealer_logo,dealer_owner)
                        VALUES ('$Dname', '$username', '$addr', $cno,'tobe','$x')";

            if (mysqli_query($db, $newuser)) {
                $newuser = "INSERT INTO user (dealers_id)
                        VALUES ('$Dname', '$username', '$addr', $cno,'tobe','$x')";
                header("location:dealerinfo.php?success=1");
            } else {
                echo "Error: " . $newuser . "<br>" . mysqli_error($db);
            }
        } else {
            //username already exists!
            header("location:dealerinfo.php?err=2");
        }
    }
?>