<?php
    require_once('dbConnect.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $obj = json_decode(file_get_contents('php://input'), true);

        $query = "SELECT * FROM `user` WHERE `EmailId`='".$obj[0]['EmailId']."' ";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)>0)
        {
            $query = "UPDATE `user` SET `HashTags`='".$obj[0]['Hashtags']."' WHERE `Emailid`='".$obj[0]['EmailId']."' ";
            mysqli_query($conn, $query);

            echo "Successfully updated!";
        }
        else
        {
            echo "cannot be updated check emailid";
        }

        http_response_code(200);
    }

    else
    {
       http_response_code(405);
    }
?>
