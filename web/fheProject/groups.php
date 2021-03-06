<?php

    require 'dbConnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Group Search</title>
</head>
<body>
    <header>
        <h1>FHE Groups</h1>
        <p class="addLink"><a href="add_user.php">Add New User</a></p>
        <p class="addLink"><a href="add_event.php">Add New Event</a></p>
    </header>
    <main>
        <div class="allGroups">
        <?php

            foreach($db->query('SELECT id, group_name, ward, stake FROM groups') as $row) {
                $name = $row["group_name"];
                $ward = $row["ward"];
                $stake = $row["stake"];
                $id = $row["id"];

                echo    '<div class="group">'.
                        '<h2>' . $name . '</h2>' . 
                        '<p>' . $ward . ' Ward</p>' . 
                        '<p>' . $stake . ' Stake</p>' . 
                        '<form action="users.php" method="GET">' . 
                        '<input type="text" name="group_number" value="' . $id . '" hidden>' . 
                        '<input class="button" type="submit" value="See Users">' . 
                        '</form>' . 
                        '<form action="events.php" method="GET">' . 
                        '<input type="text" name="group_number" value="' . $id . '" hidden>' . 
                        '<input class="button" type="submit" value="See Events">' . 
                        '</form>'.
                        '</div>';
            }

        ?>
        </div>
    </main>
    <footer>
        <p>&copy Derek Leavitt 2019</p>
    </footer>  
</body>
</html>