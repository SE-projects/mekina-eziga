<?php
session_start(); 

if (!isset($_SESSION['loginid']) || !isset($_SESSION['username']))
{
    // user is not logged in.
    if (isset($_POST['cmdlogin']))
    {
        // retrieve the username and password sent from login form
        // First we remove all HTML-tags and PHP-tags, then we create a md5-hash
        // This step will make sure the script is not vurnable to sql injections.
        $u = strip_tags($_POST['username']);
        $p = md5(strip_tags($_POST['password']));
        //Now let us look for the user in the database.
        $db = mysqli_connect('localhost','root','','shop')
                or die('Error connecting to MySQL server.'); 
        $query = "SELECT * FROM user WHERE Username = '$u' AND Password = '$p' LIMIT 1";
        $result = mysqli_query($db, $query);
        // If the database returns a 0 as result we know the login information is incorrect.
        // If the database returns a 1 as result we know  the login was correct and we proceed.
        // If the database returns a result > 1 there are multple users
        // with the same username and password, so the login will fail.
        if (mysqli_num_rows($result) != 1)
        {
            // invalid login information
            //show the register page again.
            header("location:register.php?err=1");
        } else {
            // Login was successfull
            $row = mysqli_fetch_array($result);
            // Save the user ID for use later  
            $_SESSION['userid'] = $row['UserID'];
             $_SESSION['u_type'] = $row['userType_id'];
              $_SESSION['dealer_id'] = $row['dealers_id'];
              // Save the username for use later
            $_SESSION['username'] = $u;
              // Now redirect to homepage

            if ($_SESSION['u_type']==1) {
                    header("Location:seller.php?login=success");
                    }
             else if ($_SESSION['u_type']==2) {
                    header("Location:buyer.php?login=success");
                    }
            else if ($_SESSION['u_type']==3) {
                if ($_SESSION['dealer_id']==0||$_SESSION['dealer_id']==1)header("location:dealerinfo.php?enterinfo");
                     else header("Location:manager/manager.php?login=success");

                    }
                    else if ($_SESSION['u_type']==4) {
                    header("Location:manager/mediator.php?login=success");
                    }
            else if ($_SESSION['u_type']==5) {
                    header("Location:finincialteam.php?login=success");
                    }
                    else if ($_SESSION['u_type']==6) {
                    header("Location:technicalteam.php?login=success");
                    }
                    else if ($_SESSION['u_type']==7) {
                    header("Location:purchaserteam.php?login=success");
                    }
                    else if ($_SESSION['u_type']==8) {
                    header("Location:delevererteam.php?login=success");
                    }
                  
        }
    }
 
} else {
     // The user is already loggedin, so we show the home page.
    header("location:rigister.php");
}
?>