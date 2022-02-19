<?php
    if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $lastname = $_POST['lastname'];
        $message = $_POST['message'];
        
        //database details. 
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "web_blog";

        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        // $sql = "INSERT INTO blog_form (firstname, email, lastname, message) VALUES ('$firstname', '$email', '$lastname', '$message')";
         $sql = "INSERT INTO `blog_form`(`firstname`, `email`, `lastname`, `message`) VALUES ('$firstname','$email','$lastname','$message')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Successfully saved";
        }
      //connection closed.
       // mysqli_close($con);
    }
?>