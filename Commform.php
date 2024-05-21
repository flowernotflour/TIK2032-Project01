<?php

    $connection = mysqli_connect('localhost','root','','comms_db');
    if(isset($_POST['send'])){
        $email = $_POST['email'];
        $commtype = $_POST['commtype'];
        $details = $_POST['details'];

        $request = "insert into commsform(email, commstype, details) values('$email','$commtype','$details')";

        mysqli_query($connection, $request);

        header('location:comm.php');
    }else{
        echo 'something went wrong try again';
    }

?>