<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        require "conn.php";        
        $query = "DELETE FROM ucesnici WHERE id = {$id}";  
        mysqli_query($conn,$query);
        header("location: index.php");
    }
?>
