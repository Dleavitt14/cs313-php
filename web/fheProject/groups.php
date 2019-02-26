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
        <img src="header.jpg" alt="skyline">
    </header>
    <main>
        <h1>FHE Groups</h1>
        <p class="add"><a href="add_user.php">Add New User</a></p>
        <p class="add"><a href="add_event.php">Add New Event</a></p>
        <?php

            foreach($db->query('SELECT id, group_name, ward, stake FROM groups') as $row) {
                $name = $row["group_name"];
                $ward = $row["ward"];
                $stake = $row["stake"];
                $id = $row["id"];

                echo '<h2>' . $name . '</h2>' . 
                        '<p>' . $ward . ' Ward</p>' . 
                        '<p>' . $stake . ' Stake</p>' . 
                        '<form action="users.php" method="GET">' . 
                        '<input type="text" name="group_number" value="' . $id . '" hidden>' . 
                        '<input type="submit" value="See Users">' . 
                        '</form>' . 
                        '<form action="events.php" method="GET">' . 
                        '<input type="text" name="group_number" value="' . $id . '" hidden>' . 
                        '<input type="submit" value="See Events">' . 
                        '</form>';
            }

        ?>
    </main>
    <footer>
    </footer>  
</body>
</html>