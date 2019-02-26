<?php

    require 'dbConnect.php';

    if (isset($_GET['group_number'])) {
        $group = $_GET['group_number'];
        $stmt = $db->prepare('SELECT * FROM users WHERE group_id=:id');
        $stmt->bindValue(':id', $group, PDO::PARAM_INT);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Events</title>
</head>
<body>
    <header>
        <h1>Users For Group </h1>
        <p class="homeLink"><a href="groups.php">Home</a></p>
    </header>
    <main>
        <?php

            foreach($rows as $event) {
                $fName = $event["first_name"];
                $lName = $event["last_name"];
                $birthday = $event["birthday"];
                $fColor = $event["favorite_color"];
                $hometown = $event["hometown"];
                $gLeader = $event["group_leader"];
                $hobby = $event["favorite_hobby"];
                $single = $event["single"];
                $major = $event["major"];
                $semester = $event["semester_in_school"];
                $photo = $event["photo"];

                echo '<h2><strong>Name:</strong> ' . $fName . ' ' . $lName . '</h2>';
                
                if ($gLeader) {
                    echo '<p>Group Leader</p>';
                }

                echo '<p><strong>Birthday:</strong> ' . $birthday . '</p>' . 
                        '<p><strong>Favorite Color:</strong> ' . $fColor . '</p>' . 
                        '<p><strong>Hometown:</strong> ' . $hometown . '</p>' . 
                        '<p><strong>Favorite Hobby:</strong> ' . $hobby . '</p>' . 
                        '<p><strong>Major:</strong> ' . $major . '</p>' . 
                        '<p><strong>Semester:</strong> ' . $semester . '</p>' . 
                        '<p><strong>Photo:</strong> ' . $photo . '</p>';

                if ($single) {
                    echo '<p><strong>Relationship Status:</strong> Single</p>';
                }
                else {
                    echo '<p><strong>Relationship Status:</strong> Taken :)</p>';
                }
            }

        ?>
    </main>
    <footer>
        <p>&copy Derek Leavitt 2019</p>
    </footer>  
    
</body>
</html>