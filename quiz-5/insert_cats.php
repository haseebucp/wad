<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 1/8/2019
 * Time: 1:57 PM
 */

$servername = "localhost";
$username = "root";
$password = "";
$database="Q5";


// Create connection
$con = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['insert_category']))
{
    $pro_cat = $_POST['pro_cat'];

    $insertproquery = "insert into insert_c (pro_cat) 
                        values ($pro_cat)";


    if (mysqli_query($con, $insertproquery))
    {
        echo "New record created successfully";
    }
    else
    {
        echo "Error: " . $insertproquery . "<br>" . mysqli_error($con);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0"> <!-- корректное отображение на мобильных устройствах, отмена масштабирования -->
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Inserting Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<div class="container bg-warning text-center">
<h1>
    WELCOME PLEASE SELECT CATEGORY:
</h1>
    <form action="" method="post">
    <select class="form-control" id="pro_cat" name="pro_cat">
        <option>Select Category</option>
        <option>Mobile</option>
        <option>Laptop</option>
        <option>Tablet</option>
        <option>Watch</option>
        <option>Camera</option>
    </select>
        <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
    </form>
    <br>
</div>

</body>

</html>
