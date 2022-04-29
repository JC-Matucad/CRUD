<?php
    include("connection.php");


    $username = $_POST["Username"];
    $pass = $_POST["Password"];
    $cpass = $_POST["CPassword"];
    $email = $_POST["Email"];
    

    if(isset($_POST['register'])){
        $sql = "SELECT username FROM student WHERE username = '$username' ";
        $result = $conn->query($sql);   
        if ($result->num_rows > 0){
            echo "user already exist";
        }else{
            $sql2 = "SELECT email FROM student WHERE email = '$email' ";
            $result2 = $conn->query($sql2);   
                if ($result2->num_rows > 0){
                    echo "email already exist";
                }else{
                    if($pass != $cpass){
                        echo "pass not match";
                    }else{
                        $sql3 = "INSERT INTO `student`(`username`, `password`, `email`) VALUES ('$username','$pass','$email')";
                        if (mysqli_query($conn, $sql3)) {
                        echo "New record created successfully";
                    };
                };
            };
        };
    };
?>