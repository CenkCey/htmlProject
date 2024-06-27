<?php
 include('connect.php');
 $name = $_POST['name'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $txtusername = $_POST['txtusername'];
 $psw = $_POST['psw'];
 $gender = $_POST['gender'];
 $p1 = $_POST['p1'];
 $address = $_POST['address'];
 $sql = " SELECT ID FROM users where username = '$txtusername'";
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count < 1){  
             $stmt=$conn->prepare("insert into users(name,lastname,email,username,password,gender,phone,address)values(?,?,?,?,?,?,?,?)");
             $stmt->bind_param("ssssssis",$name,$lname,$email,$txtusername,$psw,$gender,$p1,$address);
             $stmt->execute();
             header("Location:http://localhost/jitproject/success.html");
             $stmt->close();
             $conn->close();
             die();
        }  
        else{  
            header("Location:http://localhost/jitproject/usernamesaresame.html");
        }

 ?>