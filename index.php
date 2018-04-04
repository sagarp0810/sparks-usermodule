<?php
    require_once('dbConnect.php'); //connect to database

    $query = "select * from user";
    $result = mysqli_query($conn,$query);
?>

<html>
    <head>
        <title>Sparks Usermodule</title>
    </head>

    <body>
        <table>
			<thead>
				<tr>
                    <th>S No.</th>
    				<th>EmailId</th>
    				<th>Status</th>
                    <th>Hashtags</th>
                    <th>Roles</th>
                    <th>TechnologyRatings</th>
                    <th>PeopleRatings</th>
                    <th>is_deleted</th>
                    <th>deletedDate</th>
				</tr>
			</thead>

            <!--fetch and display data from MySQL-->
            <?php
                $i=1;

                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $row["EmailId"] . "</td>";
                    echo "<td>" . $row["Status"] . "</td>";
                    echo "<td>" . $row["Hashtags"] . "</td>";
                    echo "<td>" . $row["Roles"] . "</td>";
                    echo "<td>" . $row["TechnologyRatings"] . "</td>";
                    echo "<td>" . $row["PeopleRatings"] . "</td>";
                    echo "<td>" . $row["is_deleted"] . "</td>";
                    echo "<td>" . $row["deletedDate"] . "</td>";
                    echo "</tr>";
                    ++$i;
                }
            ?>

        </table>
        <br><hr>

        <a href="get.php"><button>Get Data</button></a>
        <a href="update.php"><button>Update Data</button></a>
    </body>
<html>
