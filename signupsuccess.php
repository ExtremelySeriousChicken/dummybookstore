<html>
<body>
<?php
    include '/database/db.php'

    $db = getdb();

    //if the request is a post
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //if post method is a post
        if(checkData($_POST)){
            //then we put the data into the postgresql
            //FIXME FINISH THIS WHEN I have time
            //to tedious now
            //$data = sanitizeAndHash($_POST);

            $result = pg_query($db, "INSERT INTO 
                users(name, username, email, password)
                VALUES($data['name'], $data['username'],
                    $data['email'], $data['password'])" );

            echo "<p>" . $data['name'] . ", Thank you for signing up" . "</p>";
        }else{
            echo "<p>One or more of the data is invalid</p>";
        }
    }else{
        header("Location: ./main.php");
        //if the thing is a GET
    }

    //this function will check if the data is valid
    //ie the username is less than 20 char, 
    //the password is less than 20 char
    //this email is an email
    //the full name is less than 255 character
    //The function will receive a post arguments and 
    //return true if all the data is valid
    //else return false
    function checkData($POST){
        //FIXME FINISH THIS WHEN I HAVE TIME
        return true;
    }
?>