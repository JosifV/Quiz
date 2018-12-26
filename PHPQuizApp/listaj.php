<?php
    require 'conn.php';
            $query = "SELECT * FROM ucesnici";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0){
                echo '<h3> Hall of fame: </h3><br>';
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div>
                        <!-- <h4>ID: <?php echo $row['id']?></h4> -->
                        <h5><?php echo $row['name']." ".$row['surname']?></h5>
                        <h5><?php echo $row['email']?></h5>
                        <h5>Score: <?php echo $row['score']?></h5>
                        <br>
                        <!-- <a href="obrisi.php?id=<?php echo $row['id']?>">Delete this</a>   -->
                    </div>
                    <?php
                }
            }
            else{
                echo "No results ".mysqli_error();
            }
?>