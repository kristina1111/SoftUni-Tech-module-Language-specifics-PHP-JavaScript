<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Request - VarDump</title>
    <style>
        div {
            width: 50px;
            display: inline-block;
        }
    </style>
</head>
<body>
<form>
    <div>Name:</div>
    <input type="text" name="person"/>
    </br></br>
    <div>Age:</div>
    <input type="text" name="age"/>
    </br></br>
    <div>Town:</div>
    <select name="town">
        <option value="1">Sofia</option>
        <option value="2">Varna</option>
        <option value="3">Plovdiv</option>
        <option value="4">Burgas</option>
        <option value="5">Ruse</option>
    </select>
    </br></br>
    <input type="submit"/>
</form>
    <?php
        var_dump($_GET);
    ?>
</body>
</html>