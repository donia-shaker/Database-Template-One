<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Making an Appointment at a clinic</title>
    <!-- css Normalized -->
    <link rel="stylesheet" href="css/normalized.css" />
    <!-- css file -->
    <link rel="stylesheet" href="css/clinc.css" />
    <!-- Work Sans -->
    <link rel="preconnect" href="fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
  </head>
  <body>
    <!-- start main -->
    <main >
      <div class="container">
        <h2>Welcome To AL Amal Clinc</h2>
        <div class="info">
          <form action="index.php" method="post">
            <input type="text" name="name" placeholder="Patient's Name" />
            <input type="text" name="phone" placeholder="Phone Number" />
            <input type="date" name="date"  />
            <input type="submit" name="send" value="Send" />
          </form>

        </div>
        
          <?php
          // Dont forget to connect with database
          
       $server = "localhost";
       $username = "root";
       $password = "";
       $database = "clinc";

      $connect= mysqli_connect($server, $username, $password, $database);

          //send information to the database
          $patienName = $_POST["name"];
          $patentPhone = $_POST["phone"];
          $Date = $_POST["date"];
          $Send =$_POST["send"];

          if($Send){
            $query = "INSERT INTO patients(name, phone, date) VALUES('$patienName','$patentPhone','$Date')";
            $result = mysqli_query($connect,$query);
            echo "<p style='color:#75d5ca; text-align:center; margin-top:50px'>"."The Prosses Successful"."</p>";
          }
          else {
            echo "<p style='color:red; text-align:center; margin-top:50px'>"."The Prosses Fail"."</p>";

          }
          ?>
      </div>
    </main>
    <!-- end main -->
  </body>
</html>
