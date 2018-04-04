<?php
    require_once('dbConnect.php');
    $result = json_decode(file_get_contents('http://mentormatchingapp.herokuapp.com/get/Users.php?createdAfter=2018-03-12'),true);

    if(!empty($result))
    {
        foreach($result as $r)
        {
            $name = $r['name'];
            $email = $r['email'];
            $Status = "New";

            $query = "INSERT INTO `user` (`Emailid`,`Status`) VALUES ('".$email."','".$Status."')";
            mysqli_query($conn, $query);
        }
    }
    else
    {
        echo "No new user";
    }
?>
