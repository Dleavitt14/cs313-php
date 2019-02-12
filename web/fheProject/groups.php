<?php

    require 'dbConnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Group Search</title>
</head>
<body>
    <header>
    </header>
    <main>
        <h1>FHE Groups</h1>
        <?php

            foreach($db->query('SELECT group_name, ward, stake FROM groups') as $row) {
                $name = $row["group_name"];
                $ward = $row["ward"];
                $stake = $row["stake"];

                echo '<h2>' . $name . '</h2>' . 
                        '<p>' . $ward . ' Ward</p>' . 
                        '<p>' . $stake . 'Stake</p>';
            }

        ?>
    </main>
    <footer>
    </footer>  
</body>
</html>