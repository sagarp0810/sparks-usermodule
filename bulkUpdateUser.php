<?php
    require_once('dbConnect.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $obj = json_decode(file_get_contents('php://input'), true);
        print_r($obj);

        $query = "SELECT * FROM `user` WHERE `Emailid`='".$obj['usersData'][0]['email']."' ";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)>0)
        {
            $query = "UPDATE `user` SET `Status`='".$obj['usersData'][0]['status']."',`HashTags`='".$obj['usersData'][0]['hashtags']."',`Roles`='".$obj['usersData'][0]['roles']."',`TechnologyRatings`='".$obj['usersData'][0]['techRating']."',`PeopleRatings`='".$obj['usersData'][0]['peopleRating']."' WHERE `Emailid`='".$obj['usersData'][0]['email']."' ";
            mysqli_query($conn, $query);
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
