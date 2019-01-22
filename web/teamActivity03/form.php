<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <form action="results.php" method="post">
        Name: <input name="name" type="text">
        <br>
        Email: <input name="email" type="text">
        <br>
        Major: 
        <ul>
            <li>CS:<input name="major" type="radio" value="CS"></li>
            <li>CIT:<input name="major" type="radio" value="CIT"></li>
            <li>WDD:<input name="major" type="radio" value="WDD"></li>
            <li>CE:<input name="major" type="radio" value="CE"></li>
        </ul>
        Comments: 
        <br>
        <textarea name="comments"></textarea>
        <br>
        Continents Visited:
        <br>
        <input name="continent[]" type="checkbox" value="North America"> North America
        <br>
        <input name="continent[]" type="checkbox" value="South America"> South America
        <br>
        <input name="continent[]" type="checkbox" value="Europe"> Europe
        <br>
        <input name="continent[]" type="checkbox" value="Asia"> Asia
        <br>
        <input name="continent[]" type="checkbox" value="Australia"> Australia
        <br>
        <input name="continent[]" type="checkbox" value="Africa"> Africa
        <br>
        <input name="continent[]" type="checkbox" value="Antarctica"> Antarctica
        <br>

        <input type="submit">
    </form>
    
</body>
</html>