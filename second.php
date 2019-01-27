<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/mycss.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>Second file</h2>
    This is the second file
    <h3>PHP variables</h3>
    <?php
    $name="Garfield";
    $age=5;
    echo'Name of the cat is <b>'.$name.'</b> and it is <b>'.$age.'</b> years old';    
    ?>
    <h3>PHP array</h3>
    Names from the array: <br>
    <?php
    $names= array("Jim","Lisa","Bob");
    print_r($names);
    ?> <br>
    Second name is <?php echo($names[1])?>
    <h3>PHP assosiative array</h3>
    All people: <br>
    <?php
    $students=array(
    array("fname"=>'Jim', "lname"=>'Smith'),
    array("fname"=>'Lisa', "lname"=>'Simpson'),
    array("fname"=>'Bob', "lname"=>'Jones'),
    );
    print_r($students);
    echo("<br> Lastnames: <br>");
    foreach ($students as $row){
        echo' '.$row['lname'].' <br>';
    }
    ?>
</body>
</html>