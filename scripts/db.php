<?php 
    $errorName = 'Oops Cannot Connect at the moment';
    $username='root';
    $password='';
    $host='localhost';
    $db = 'society';

    $con = mysqli_connect($host, $username, $password, $db);

    if($con){
        // echo 'Database Connected Successfully';
    }else{
        echo mysqli_error($con);
    }

?>