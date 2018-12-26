
<?php
    require 'conn.php';
    if(isset($_POST['fName']) && isset($_POST['lName']) && isset($_POST['email']) && isset($_POST['score'])){
        if(!empty($_POST['fName']) && !empty($_POST['lName']) && !empty($_POST['email']) && !empty($_POST['score'])){
            $fName= trim($_POST["fName"]);
            $lName= trim($_POST["lName"]);
            $email= trim($_POST["email"]);
            $score= trim($_POST["score"]);

           /*  $fName = mysqli_real_escape_string($conn, $fName);
            $lName = mysqli_real_escape_string($conn, $lName);
            $email = mysqli_real_escape_string($conn, $email);
            $score = mysqli_real_escape_string($conn, $score); */

            $query = "INSERT INTO ucesnici (name, surname, email, score) VALUE ('{$fName}', '{$lName}', '{$email}', '{$score}')";

            if(mysqli_query($conn,$query) === true){
                echo "<div style='padding:5rem 40%'>
                <h1>Data entered in database</h1><br>
                <a style='background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;' 
                href='https://wproba.000webhostapp.com/'>
                Go Back</a>
                </div>";
            }
            else{
                echo "<div style='padding:5rem 40%'>
                <h1>Error occurred, data not entered in database..</h1><br>
                <a style='background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;' 
                href='https://wproba.000webhostapp.com/'>
                Go Back</a>
                </div>";
            }

        }else{
            echo "<div style='padding:5rem 40%'>
            <h1>Something went wrong</h1><br>
            <a style='background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;' 
                href='https://wproba.000webhostapp.com/'>
                Go Back</a>
            </div>";
        }
    }
?>