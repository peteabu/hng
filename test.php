<?php
$hostname='localhost';
$username='root';
$password='';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=hng",$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
    echo 'Connected to Database<br/>';


$sql = "INSERT INTO interns (intern_name, intern_email, intern_city)
VALUES ('".$_POST["int_name"]."','".$_POST["int_email"]."','".$_POST["int_city"]."')";


if ($dbh->query($sql)) {
    echo "New intern added";
}
else{
    echo "Unable to add new intern";
}

    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
