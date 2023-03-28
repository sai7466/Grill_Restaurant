
<?php

 
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $con = mysqli_connect('localhost', 'root', '','rest_project');

    // get the post records

    $name = $_POST['name'];
    $gmail = $_POST['email'];
    $number = $_POST['number'];
    $guest= $_POST['guest'];
    $time= $_POST['time'];
    $date=$_POST['indate'];

    // database insert SQL code
    $sql = "INSERT INTO `restaurant` (`name`, `gmail`, `num`, `guest`,`time`, `date`) VALUES ( '$name', '$gmail', '$number', '$guest','$time','$date')";  

    // insert in database 
    $rs = mysqli_query($con, $sql);
    echo "succesfully booked"."<br>";

    echo $name."<br>";
    echo $gmail."<br>";
    echo $number."<br>";
    echo $guest."<br>";
    echo $time."<br>";
    echo $date."<br>";

  ?>
