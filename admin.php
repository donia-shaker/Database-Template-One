<?php

include "main.php"
?>

    <table>
      <th>ID</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Date</th>
    

    <?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "clinc";

    $connect= mysqli_connect($server, $username, $password, $database);

    //clone information from database
    $query = "SELECT * FROM patients";
    $result = mysqli_query($connect,$query);

    if($result){
      while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['phone']."</td><td>".$row['date']."</td></tr>";
      }
      echo"</table>";
    }

   
    ?>