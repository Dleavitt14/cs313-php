<?php

    require 'dbConnect.php';

    if (isset($_POST['fName'])) {
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $birthday = $_POST['birthday'];
        $color = $_POST['color'];
        $hometown = $_POST['hometown'];
        $gLeader = $_POST['gLeader'];
        $hobby = $_POST['hobby'];
        $single = $_POST['single'];
        $major = $_POST['major'];
        $semester = $_POST['semester'];
        $photo = $_POST['photo']; 
        $gId = $_POST['gId'];

        $stmt = $db->prepare('INSERT INTO users VALUES (default, :group_id, :first_name, :last_name, :birthday, :favorite_color, :hometown, :group_leader, :favorite_hobby, :single, :major, :semester_in_school, :photo);');
        $stmt->bindValue(':group_id', $gId, PDO::PARAM_INT);
        $stmt->bindValue(':first_name', $fName, PDO::PARAM_STR);
        $stmt->bindValue(':last_name', $lName, PDO::PARAM_STR);
        $stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);
        $stmt->bindValue(':favorite_color', $color, PDO::PARAM_STR);
        $stmt->bindValue(':hometown', $hometown, PDO::PARAM_STR);
        $stmt->bindValue(':group_leader', $gLeader, PDO::PARAM_BOOL);
        $stmt->bindValue(':favorite_hobby', $hobby, PDO::PARAM_STR);
        $stmt->bindValue(':single', $single, PDO::PARAM_BOOL);
        $stmt->bindValue(':major', $major, PDO::PARAM_STR);
        $stmt->bindValue(':semester_in_school', $semester, PDO::PARAM_INT);
        $stmt->bindValue(':photo', $photo, PDO::PARAM_STR);
        $stmt->execute();

        header("Location: groups.php");
    }
    else if (isset($_POST['prayer'])) {
        $aName = $_POST['aName'];
        $aDescription = $_POST['aDescription'];
        $prayer = $_POST['prayer'];
        $thought = $_POST['thought'];
        $treat = $_POST['treat'];
    }
    else {
        echo 'There is an Error :(';
    }


?>