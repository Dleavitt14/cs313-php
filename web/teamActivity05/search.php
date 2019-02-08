<?php

require 'connect.php';

if (isset($_GET['query'])) {
    $book = $_GET['query'];
    $stmt = $db->prepare('SELECT * FROM scriptures WHERE book=:book');
    $stmt->bindValue(':book', $book, PDO::PARAM_STR);
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
    <title>Document</title>
</head>
<body>
    <form action="#" method="GET">
        <input type="text" name="query">
        <input type="submit">
    </form>

    <?php

        foreach($rows as $row) {
            echo $row['book'];
            echo $row['chapter'];
            echo $row['verse'];
            echo $row['content'];
        }

    ?>

</body>
</html>